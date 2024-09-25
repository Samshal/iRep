<?php

namespace App\Models;

class Citizen extends BaseAccount
{
    protected $db;

    public function __construct($db, array $data)
    {
        $this->db = $db;
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = bcrypt($data['password']);
        $this->account_type_id = $this->getAccountTypeId($db, $data['account_type']);
        $this->phone_number = $data['phone_number'];
        $this->dob = $data['dob'];
        $this->state = $data['state'];
        $this->local_government = $data['local_government'];
        $this->occupation = $data['occupation'];
        $this->location = $data['location'];
    }

    public function insert()
    {
        $query = "
        INSERT INTO citizens
        (name, email, password, account_type_id, phone_number, dob, state,
        local_government, occupation, location)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);
        $stmt->execute([
            $this->name,
            $this->email,
            $this->password,
            $this->account_type_id,
            $this->phone_number,
            $this->dob,
            $this->state,
            $this->local_government,
            $this->occupation,
            $this->location
        ]);

        return $this->db->lastInsertId();
    }

}
