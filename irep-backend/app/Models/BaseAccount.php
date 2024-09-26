<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class BaseAccount extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $account_type;
    protected $db;
    protected $id;

    public function __construct($db = null)
    {
        $this->db = $db;
    }

    public function getJWTIdentifier(): mixed
    {
        return 1;
    }

    public function getJWTCustomClaims(): array
    {
        return [
            'account_type' => $this->account_type,
        ];
    }

    protected function getAccountTypeId(string $accountType): int
    {
        $query = "SELECT id FROM account_types WHERE name = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$accountType]);

        $accountTypeId = $stmt->fetchColumn();

        if ($accountTypeId === false) {
            $accountTypeId = 1;
        }

        Log::info("Account type id: $accountTypeId");

        $this->account_type = $accountTypeId;
        return $accountTypeId;
    }

    public static function findByEmail(string $email): mixed
    {
        $db = DB::connection()->getPdo();
        $className = static::class;
        Log::info("Class name: $className");
        $table = strtolower((new \ReflectionClass($className))->getShortName()) . 's';
        Log::info("Table name: $table");

        $query = "SELECT * FROM $table WHERE email = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$email]);
        $data = $stmt->fetch(\PDO::FETCH_ASSOC);

        log::info($data);

        if ($data) {
            return new $className($db, $data);
        }

        return null;
    }
}
