<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserVerified
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if (!$user || !$user->email_verified) {
            return response()->json(['message' => 'Account is not verified.'], 403);
        }

        return $next($request);
    }
}
