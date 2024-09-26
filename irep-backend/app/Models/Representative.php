<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;

/**
 * Class Representative represents the Representative model in the database
 */
class Representative extends BaseAccount
{
    public function __construct($db, array $data)
    {
        parent::__construct($db, $data);
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->account_type = $this->getAccountTypeId($data['account_type']);
        $this->phone_number = $data['phone_number'];
        $this->dob = $data['dob'];
        $this->state = $data['state'];
        $this->local_government = $data['local_government'];
        $this->position = $data['position'];
        $this->party = $data['party'];
        $this->constituency = $data['constituency'];
    }

    /**
     * Insert a new representative into the database
     *
     * @param \PDO $db
     * @return void
     */
    public function insert()
    {

        $query = "
        INSERT INTO representatives
        (name, email, password, account_type, phone_number, dob, state,
        local_government, position, party, constituency)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);
        $stmt->execute([
            $this->name,
            $this->email,
            Hash::make($this->password),
            $this->account_type,
            $this->phone_number,
            $this->dob,
            $this->state,
            $this->local_government,
            $this->position,
            $this->party,
            $this->constituency
        ]);

        return $this->db->lastInsertId();
    }

}
