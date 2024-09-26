<?php

namespace App\Models;

class Citizen
{
    protected $accountId;
    protected $occupation;
    protected $location;

    public function __construct($accountId, $data)
    {
        $this->accountId = $accountId;
        $this->occupation = $data['occupation'];
        $this->location = $data['location'];
    }
    /**
     * Insert a new citizen into the database
     *
     * @param \PDO $db
     * @return void
     */
    public function insert($db)
    {
        $query = "
        INSERT INTO citizens (account_id, occupation, location)
        VALUES (?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$this->accountId, $this->occupation, $this->location]);

        return $this->accountId;
    }
}
