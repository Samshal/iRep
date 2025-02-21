<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create admin_notifications table
        try {
            DB::statement('
				CREATE TABLE admin_notifications (
				id INT AUTO_INCREMENT PRIMARY KEY,
				account_id INT,
				entity_id INT,
				type VARCHAR(255) NOT NULL,
				title VARCHAR(255) NOT NULL,
				body TEXT NOT NULL,
				read_at TIMESTAMP NULL,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				FOREIGN KEY (account_id) REFERENCES admins(id) ON DELETE CASCADE
				)
		');
        } catch (\Exception $e) {
            Log::error("Failed to create admin_notifications table: " . $e->getMessage());
        }

        // Create password_resets table
        try {
            DB::statement('CREATE TABLE password_resets (
				id INT AUTO_INCREMENT PRIMARY KEY,
				account_id INT UNIQUE,
				email VARCHAR(255) NOT NULL,
				token VARCHAR(255) NOT NULL,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				FOREIGN KEY (account_id) REFERENCES accounts(id) ON DELETE CASCADE
				)');

        } catch (\Exception $e) {
            Log::error("Failed to create password_resets table: " . $e->getMessage());
        }

        // Add created_at column to likes table
        try {
            DB::statement("
                ALTER TABLE likes
                ADD COLUMN created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
            ");
        } catch (\Exception $e) {
            Log::error("Failed to add created_at to likes table: " . $e->getMessage());
        }

        // Add created_at column to reposts table
        try {
            DB::statement("
                ALTER TABLE reposts
                ADD COLUMN created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
            ");
        } catch (\Exception $e) {
            Log::error("Failed to add created_at to reposts table: " . $e->getMessage());
        }

        // Add created_at column to bookmarks table
        try {
            DB::statement("
                ALTER TABLE bookmarks
                ADD COLUMN created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
            ");
        } catch (\Exception $e) {
            Log::error("Failed to add created_at to bookmarks table: " . $e->getMessage());
        }

        // Add supporter and status column to comments table
        try {
            if (!Schema::hasColumn('comments', 'status')) {
                DB::statement("
            ALTER TABLE comments
            ADD COLUMN status ENUM('active', 'inactive') DEFAULT 'active';
        ");
            }

            if (!Schema::hasColumn('comments', 'supporter')) {
                DB::statement("
            ALTER TABLE comments
            ADD COLUMN supporter BOOLEAN DEFAULT FALSE;
        ");
            }
        } catch (\Exception $e) {
            Log::error("Failed to add columns to comments table: " . $e->getMessage());
        }

        // Add approved column to representatives table
        try {
            if (!Schema::hasColumn('representatives', 'approved')) {
                DB::statement("
            ALTER TABLE representatives
            ADD COLUMN approved BOOLEAN DEFAULT FALSE;
        ");
            }

            if (!Schema::hasColumn('representatives', 'status')) {
                DB::statement("
            ALTER TABLE representatives
            ADD COLUMN status ENUM('verified', 'pending', 'unverified') DEFAULT 'unverified';
        ");
            }

            // Add status column with ENUM type if it doesn't exist
        } catch (\Exception $e) {
            Log::error("Failed to add columns to representatives table: " . $e->getMessage());
        }

        // Add level column to the positions table
        try {
            if (!Schema::hasColumn('positions', 'level')) {
                DB::statement("
			ALTER TABLE positions
			ADD COLUMN level INT DEFAULT 4;
			");
            }
        } catch (\Exception $e) {
            Log::error("Failed to add level column to positions table: " . $e->getMessage());
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Handle reverse logic if needed
    }
};
