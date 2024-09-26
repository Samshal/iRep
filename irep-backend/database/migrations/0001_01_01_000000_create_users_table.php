<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE account_types (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name VARCHAR(255) UNIQUE
            )
        ");

        // Seed the account_types table
        DB::table('account_types')->insert([
            ['name' => 'citizen'],
            ['name' => 'representative'],
            ['name' => 'admin'],
        ]);

        DB::statement("
            CREATE TABLE accounts (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                photo_url VARCHAR(255),
                name VARCHAR(255),
                email VARCHAR(255) UNIQUE,
                phone_number VARCHAR(20) UNIQUE,
                dob DATE,
                state VARCHAR(255),
                local_government VARCHAR(255),
                polling_unit VARCHAR(255),
                password VARCHAR(255),
                email_verified BOOLEAN DEFAULT FALSE,
                remember_token VARCHAR(100) NULL,
                account_type INTEGER NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");

        DB::statement("
            CREATE TABLE citizens (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                occupation VARCHAR(255),
                location VARCHAR(255),
                account_id INTEGER NOT NULL,
                FOREIGN KEY (account_id) REFERENCES accounts (id) ON DELETE CASCADE
            )
        ");

        DB::statement("
            CREATE TABLE representatives (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                position VARCHAR(255),
                constituency VARCHAR(255),
                party VARCHAR(255),
                bio TEXT,
                account_id INTEGER,
                FOREIGN KEY (account_id) REFERENCES accounts (id) ON DELETE CASCADE
            )
        ");

        DB::statement("
            CREATE TABLE password_reset_tokens (
                email VARCHAR(255) PRIMARY KEY,
                token VARCHAR(255),
                created_at TIMESTAMP NULL
            )
        ");

        DB::statement("
            CREATE TABLE sessions (
                id VARCHAR(255) PRIMARY KEY,
                user_id INTEGER NULL,
                ip_address VARCHAR(45) NULL,
                user_agent TEXT NULL,
                payload LONGTEXT,
                last_activity INTEGER,
                FOREIGN KEY (user_id) REFERENCES citizens(id) ON DELETE SET NULL
            )
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("DROP TABLE IF EXISTS sessions");
        DB::statement("DROP TABLE IF EXISTS password_reset_tokens");
        DB::statement("DROP TABLE IF EXISTS representatives");
        DB::statement("DROP TABLE IF EXISTS citizens");
        DB::statement("DROP TABLE IF EXISTS account_types");
    }
};
