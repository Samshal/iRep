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
    public $email;

    public function __construct($db = null, array $data = [])
    {
        $this->db = $db;
        $this->email = $data['email'];
    }

    public function getJWTIdentifier(): mixed
    {
        return $this->email;
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

        log::info('Account type id retrieved.', ['account_type_id' => $accountTypeId]);

        $this->account_type = $accountTypeId;
        return $accountTypeId;
    }

    public static function findByEmail(string $email): mixed
    {
        $db = DB::connection()->getPdo();
        $className = static::class;
        $table = strtolower((new \ReflectionClass($className))->getShortName()) . 's';

        $query = "SELECT * FROM $table WHERE email = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$email]);
        $data = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($data) {
            return new $className($db, $data);
        }

        return null;
    }
}
