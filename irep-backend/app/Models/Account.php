<?php

namespace Database\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Account represents the Account model in the database
 */
class Account extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Insert a new account into the database
     *
     * @param array $data
     * @return int
     */
    public function insertAccount(array $data): int
    {
        $query = "
        INSERT INTO accounts (name, email, phone, dob, password, role, state,
        local_government, polling_unit)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);
        $stmt->execute([
            $data['name'],
            $data['email'],
            $data['phone'],
            $data['dob'],
            password_hash($data['password'], PASSWORD_BCRYPT),
            $data['role'],
            $data['state'],
            $data['local_government'],
            $data['polling_unit']
        ]);

        return $this->db->lastInsertId();
    }

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
            'role' => $this->role,
        ];
    }
}
