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
        \Log::info('Creating petition', ['title' => $this->title]);
        \Log::info('Creating petition', ['description' => $this->description]);
        \Log::info('Creating petition', ['creator_id' => $this->creatorId]);
        \Log::info('Creating petition', ['target_representative_id' => $this->targetRepresentativeId]);

        $query = "
        INSERT INTO petitions (title, description, creator_id, target_representative_id)
        VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->title, $this->description, $this->creatorId, $this->targetRepresentativeId]);

        return $this->db->lastInsertId();
    }
}
