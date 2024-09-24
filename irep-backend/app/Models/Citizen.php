<?php

namespace Database\Models;

/**
 * Class Citizen represents the Citizen model in the database
 */
class Citizen
{
    protected $accountId;
    protected $occupation;
    protected $address;

    public function __construct($accountId, $data)
    {
        $this->accountId = $accountId;
        $this->occupation = $data['occupation'];
        $this->address = $data['address'];
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
        INSERT INTO citizens (account_id, occupation, address)
        VALUES (?, ?, ?)";

        $stmt = $db->prepare($query);
        $stmt->execute([$this->accountId, $this->occupation, $this->address]);
    }
}
