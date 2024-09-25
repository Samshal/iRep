<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use Database\Factories\AccountFactory;
use Illuminate\Support\Facades\Log;

class AccountController extends Controller
{
    public function register(CreateAccountRequest $request)
    {
        try {

            Log::info('Creating account.', ['request' => $request->validated()]);

            $accountFactory = new AccountFactory();
            $accountId = $accountFactory->createAccount($request->validated());

            Log::info('Account created successfully.', ['account_id' => $accountId]);

            return response()->json(['account_id' => $accountId], 201);
        } catch (\Exception $e) {
            Log::error('Account creation failed.', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Account creation failed.'], 500);
        }
    }
}
