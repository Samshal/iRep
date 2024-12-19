<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Handle reverse logic if needed
    }
};
