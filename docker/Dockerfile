FROM php:8.3-cli

# Install required packages
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        unzip \
        supervisor \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install gd mysqli pdo pdo_mysql zip pcntl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /workspace/irep

# Copy the application files to the working directory
COPY . .

# Install Laravel dependencies
RUN composer install

# Expose the port for the Laravel application
EXPOSE 8000 8080

# Copy Supervisor config file and entrypoint script into the image
COPY docker/supervisord.conf /etc/supervisor/supervisord.conf
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh

# Make the entrypoint script executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Fix the session issue (replace user_id with account_id)
RUN sed -i "/protected function addUserInformation/,/return \$this;/ s/\['user_id'\]/['account_id']/" ./vendor/laravel/framework/src/Illuminate/Session/DatabaseSessionHandler.php


# Set the entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

