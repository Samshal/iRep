<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;

class BaseFactory
{
    protected $db;
    protected $post;
    protected $petition;
    protected $eyeWitnessReport;

    public function __construct()
    {
        $this->db = DB::connection()->getPdo();
    }

    public function getPetitionLocation($petitionId)
    {
        try {
            $query = "
				SELECT
					a.state_id,
					a.local_government_id
				FROM
					petitions p
				JOIN
					posts ps ON ps.id = p.post_id
				JOIN
					accounts a ON a.id = ps.creator_id
				WHERE
					ps.id = ?
			";

            $stmt = $this->db->prepare($query);
            $stmt->execute([$petitionId]);

            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $result ?: null;

        } catch (\Exception $e) {
            \Log::error("Failed to fetch petition location: " . $e->getMessage());
            return null;
        }
    }
}
