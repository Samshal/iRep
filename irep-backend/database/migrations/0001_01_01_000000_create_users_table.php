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
            CREATE TABLE Account (
                id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
                photo_url VARCHAR(255),
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                phone_number VARCHAR(20) NOT NULL UNIQUE,
                dob DATE NOT NULL,
                state VARCHAR(255),
                local_government VARCHAR(255),
                polling_unit VARCHAR(255),
                password VARCHAR(255) NOT NULL,
                role ENUM('citizen', 'representative', 'admin') NOT NULL,
                email_verified_at TIMESTAMP NULL,
                remember_token VARCHAR(100) NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");

        DB::statement("
            CREATE TABLE Citizen (
                id INT UNSIGNED PRIMARY KEY,
                occupation VARCHAR(255),
                address VARCHAR(255),
                FOREIGN KEY (id) REFERENCES Account(id) ON DELETE CASCADE
            )
        ");

        DB::statement("
            CREATE TABLE Representative (
                id INT UNSIGNED PRIMARY KEY,
                position VARCHAR(255) NOT NULL,
                constituency VARCHAR(255) NOT NULL,
                party VARCHAR(255) NOT NULL,
                bio TEXT,
                FOREIGN KEY (id) REFERENCES Account(id) ON DELETE CASCADE
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
                user_id INT UNSIGNED NULL,
                ip_address VARCHAR(45) NULL,
                user_agent TEXT NULL,
                payload LONGTEXT,
                last_activity INT,
                FOREIGN KEY (user_id) REFERENCES Account(id) ON DELETE SET NULL
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
        DB::statement("DROP TABLE IF EXISTS Representative");
        DB::statement("DROP TABLE IF EXISTS Citizen");
        DB::statement("DROP TABLE IF EXISTS Account");
    }
};
