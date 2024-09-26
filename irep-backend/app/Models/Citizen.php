<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;

class Citizen extends BaseAccount
{
    public function __construct($db = null, array $data = [])
    {
        parent::__construct($db);
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->account_type = $this->getAccountTypeId($data['account_type']);
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
        (name, email, password, account_type, phone_number, dob, state,
        local_government, occupation, location)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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
            $this->occupation,
            $this->location
        ]);

        $id = $this->db->lastInsertId();
        $this->id = $id;
        return $id;
    }

}
