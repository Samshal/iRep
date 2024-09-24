<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use Database\Models\Account;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = DB::connection()->getPdo();
    }

    public function create(CreateAccountRequest $request)
    {
        try {
            $accountModel = new Account($this->db);
            $accountId = $accountModel->insertAccount($request->validated());

            return response()->json(['account_id' => $accountId], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Account creation failed.'], 500);
        }
    }
}
