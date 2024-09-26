<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAccountRequest;
use Database\Factories\AccountFactory;
use Illuminate\Support\Facades\Log;
use App\Models\Citizen;
use App\Models\Representative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    # public function __construct()
    # {
    #     $this->middleware('auth:api', ['except' => ['login']]);
    # }

    public function register(CreateAccountRequest $request)
    {
        try {

            $accountFactory = new AccountFactory();
            $accountId = $accountFactory->createAccount($request->validated());
            Log::info('Account created successfully.', ['account_id' => $accountId]);

            return response()->json(['account_id' => $accountId], 201);
        } catch (\Exception $e) {
            Log::error('Account creation failed.', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Account creation failed.'], 500);
        }
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = Citizen::findByEmail($credentials['email']) ?? Representative::findByEmail($credentials['email']);

        if ($user && Hash::check($credentials['password'], $user->password)) {

            $token = auth()->login($user);

            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60
            ]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
