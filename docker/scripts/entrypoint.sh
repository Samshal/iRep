#!/bin/bash

CRON_FILE="/etc/crontab"
BACKUP_SCRIPT_PATH="/usr/local/bin/cron.sh"

# Install Composer dependencies if not already installed
if [ ! -d "vendor" ]; then
	composer install
fi

# Backup the database
if [ -f "$BACKUP_SCRIPT_PATH" ]; then
	if ! "$BACKUP_SCRIPT_PATH"; then
		echo "Backup db failed, proceeding without stopping the container..."
	fi
else
	echo "cron script not found!"
fi

# Cron job setup
if [ -f "$CRON_FILE" ]; then
	CRON_ENTRY="0 2 * * * root /bin/bash $BACKUP_SCRIPT_PATH"
	if ! grep -Fx "$CRON_ENTRY" "$CRON_FILE" >/dev/null; then
		echo "$CRON_ENTRY" >>"$CRON_FILE"
		systemctl restart cron && echo "Cron job added and cron restarted" || echo "Failed to restart cron"
	else
		echo "Cron job already exists in $CRON_FILE, skipping addition."
	fi
else
	echo "Cron file not found, unable to set up cron job."
fi

# Run Laravel migrate and seed database
#php artisan migrate:refresh --seed --force

# Run Laravel migration and seeder gracefully
if ! php artisan migrate --force; then
	echo "Migration failed, proceeding without stopping the container..."
fi

if ! php artisan db:seed --force; then
	echo "Seeding failed, proceeding without stopping the container..."
fi

# Index existing records in the database
if ! php artisan search:index-existing; then
	echo "Indexing existing records failed, proceeding without stopping the container..."
fi

if ! php artisan create:superadmin "irep" "password"; then
	echo "Creating superadmin failed, proceeding without stopping the container..."
fi

if ! php artisan news:fetch; then
	echo "Fetching and Indexing news failed, proceeding without stopping the container..."
fi

# Clear the cache, routes, config, and views
php artisan route:clear && php artisan config:clear && php artisan cache:clear && php artisan view:clear

# Set permissions for the storage and bootstrap/cache directories
chown -R www-data:www-data storage bootstrap/cache

# Fix the session issue (replace user_id with account_id)
sed -i "/protected function addUserInformation/,/return \$this;/ s/\['user_id'\]/['account_id']/" ./vendor/laravel/framework/src/Illuminate/Session/DatabaseSessionHandler.php

echo -e "\nMerge update tables migration into the main migration when moving to production for clean deployment\n"

# Start Supervisor to manage background processes
echo "Starting Supervisor..."
exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf

# Start Reverb for broadcasting
# echo "Starting Reverb server..."
# php artisan reverb:start --debug &

# Start Laravel queue worker
# echo "Starting Laravel queue worker..."
# php artisan queue:work --daemon &

# Tail the Laravel log
# echo "Tailing Laravel log..."
# tail -f storage/logs/laravel.log &

# Run the Laravel application using artisan serve
# echo "Starting Laravel application..."
# exec php artisan serve --host=0.0.0.0 --port=8000
