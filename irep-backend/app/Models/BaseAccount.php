<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;

abstract class BaseAccount extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $account_type;

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(): array
    {
        return [
            'account_type' => $this->account_type,
        ];
    }

    /**
     * Get the account type id
     *
     * @param \PDO $db
     * @param string $accountType
     * @return int
     */
    protected function getAccountTypeId($db, string $accountType): int
    {
        $query = "SELECT id FROM account_types WHERE name = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$accountType]);

        $accountTypeId = $stmt->fetchColumn();

        if ($accountTypeId === false) {
            $accountTypeId = 1;
        }

        log::info($accountTypeId);

        $this->account_type = $accountTypeId;
        return $accountTypeId;
    }
}
