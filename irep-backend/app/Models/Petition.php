<?php

namespace app\models;

use Illuminate\Support\Facades\DB;

class Petition
{
    protected $db;
    protected $title;
    protected $description;
    protected $creatorId;
    protected $targetRepresentativeId;

    public function __construct($db = null, $data)
    {
        $this->db = $db ?: DB::connection()->getPdo();

        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function createPetition()
    {
        $query = "
        INSERT INTO petitions (title, description, creator_id, target_representative_id)
        VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);

        try {
            $stmt->execute([$this->title, $this->description, $this->creatorId, $this->targetRepresentativeId]);
            return $this->db->lastInsertId();
        } catch (\PDOException $e) {
            if (str_contains($e->getMessage(), 'Duplicate entry')) {
                throw new \Exception('A petition with this title already exists.', 409);
            }
        }
    }

    public function signPetition($petitionId, $userId)
    {
        $query = "INSERT INTO petition_signatures (petition_id, user_id) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$petitionId, $userId]);

        return $this->db->lastInsertId();
    }
}
