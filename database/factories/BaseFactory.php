<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    public function getAccountByEntity(string $entity, int $id)
    {
        if ($entity === 'petition') {
            $table = 'petitions';
        } elseif ($entity === 'eyewitness') {
            $table = 'eye_witness_reports';
        } else {
            return null;
        }

        try {

            $query = "
				SELECT
					a.id,
					a.state_id,
					a.local_government_id
				FROM
					{$table} t
				JOIN
					posts ps ON ps.id = t.post_id
				JOIN
					accounts a ON a.id = ps.creator_id
				WHERE
					ps.id = ?
			";

            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);

            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $result ?: null;

        } catch (\Exception $e) {
            Log::error("Failed to fetch location: " . $e->getMessage());
            return null;
        }
    }
}
