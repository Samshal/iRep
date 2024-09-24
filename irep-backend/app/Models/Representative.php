<?php

namespace Database\Models;

/**
 * Class Representative represents the Representative model in the database
 */
class Representative
{
    protected $accountId;
    protected $position;
    protected $party;
    protected $constituency;


    public function __construct($accountId, $data)
    {
        $this->accountId = $accountId;
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
    public function insert($db)
    {
        $query = "
        INSERT INTO representatives (account_id, position, party, constituency)
        VALUES (?, ?, ?, ?)";

        $stmt = $db->prepare($query);
        $stmt->execute([$this->accountId, $this->position, $this->party, $this->constituency,]);
    }
}
