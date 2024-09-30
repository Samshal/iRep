<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAccountRequest;
use Illuminate\Support\Facades\Log;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register(CreateAccountRequest $request)
    {
        try {
            $accountId = $this->accountFactory->createAccount($request->validated());
            Log::info('Account created successfully.', ['account_id' => $accountId]);

            return response()->json(['account_id' => $accountId], 201);
        } catch (\Exception $e) {
            Log::error('Account creation failed.', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Account creation failed.'], 500);
        }
    }

    public function activateAccount(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');

        $verified = $this->accountFactory->activateAccount($email, $otp);

        if (!$verified) {
            return response()->json(['error' => 'Invalid OTP'], 400);
        }

        $token = auth()->login($user);
        return $this->tokenResponse($token);

    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = Account::getAccountByEmail($this->db, $credentials['email']);

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Log::info('User authenticated');
            $token = auth()->login($user);

            return $this->tokenResponse($token);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function redirect($provider)
    {
        if ($provider == 'twitter') {
            // Get the Twitter driver
            $twitter = Socialite::driver($provider);

            // Get the request token for Twitter OAuth 1.0
            $requestToken = $twitter->getRequestToken();

            // Store the request token in Redis or Cache with a unique key (using IP as an example)
            Cache::put('oauth_request_token_' . request()->ip(), $requestToken, now()->addMinutes(10));

            // Redirect to Twitter with the authorization URL
            return redirect()->away($twitter->getAuthorizationUrl($requestToken));
        }

        // For OAuth 2.0 providers like Google, Facebook, etc., use stateless
        return Socialite::driver($provider)->stateless()->redirect();
    }

    public function callback($provider)
    {
        if ($provider == 'twitter') {
            $socialUser = Socialite::driver($provider)->user();
        } else {
            $socialUser = Socialite::driver($provider)->stateless()->user();
        }

        Log::info('Social User Info:', ['socialUser' => json_encode($socialUser)]);

        $user = Account::getAccountByEmail($this->db, $socialUser->getEmail());

        if (!$user) {
            $userData = [
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'photo_url' => $socialUser->getAvatar(),
                'account_type' => 'citizen',
            ];
            $user = $this->accountFactory->createAccount($userData);
        }

        $token = auth()->login($user);

        return $this->tokenResponse($token);
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
