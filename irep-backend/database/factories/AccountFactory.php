<?php

namespace Database\Factories;

use App\Models\Citizen;
use App\Models\Representative;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * class for creating account
 */
class AccountFactory
{
    protected $db;

    public function __construct($db = null)
    {
        $this->db = $db ?: DB::connection()->getPdo();
    }

    /**
     * Create an account
     *
     * @param array $data
     * @return int
     */
    public function createAccount($data)
    {
        try {
            $this->db->beginTransaction();

            log::info('Transaction started.');

            if ($data['account_type'] === 'citizen') {
                $result = (new Citizen($this->db, $data))->insert($this->db);
            } elseif ($data['account_type'] === 'representative') {
                $result = (new Representative($this->db, $data))->insert($this->db);
            }

            log::info('Transaction completed.');
            $this->db->commit();
            log::info('Transaction committed.');

            return $result;

        } catch (\Exception $e) {
            $this->db->rollBack();
            throw $e;
        }
    }
}