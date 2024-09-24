AccountFactory
<?php

namespace Database\Factories;

use Database\Models\Account;
use Database\Models\Citizen;
use Database\Models\Representative;
use Illuminate\Support\Facades\DB;

class AccountFactory
{
    protected $db;

    public function __construct($db = null)
    {
        $this->db = $db ?: DB::connection()->getPdo();
    }

    public function createAccount($data)
    {
        try {
            $this->db->beginTransaction();
            $account = new Account($this->db);
            $accountId = $account->insertAccount($data);

            if ($data['role'] === 'citizen') {
                return (new Citizen($accountId, $data))->insert($this->db);
            } elseif ($data['role'] === 'representative') {
                return (new Representative($accountId, $data))->insert($this->db);
            }

            $this->db->commit();
        } catch (\Exception $e) {
            $this->db->rollBack();
            throw $e;
        }

        return null;
    }
}
