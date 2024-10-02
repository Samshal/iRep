<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return response()->json([
            'message' => 'Pong!',
            'status' => 'success'
        ]);
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('redirect/{provider}', [AuthController::class, 'redirect'])->name('redirect');
    Route::get('callback/{provider}', [AuthController::class, 'callback'])->name('callback');
    Route::post('activate', [AuthController::class, 'activateAccount'])->name('activate');
    Route::post('resend', [AuthController::class, 'resendActivation'])->name('resend');

    Route::group([
            'middleware' => ['auth:api', 'verified']
    ], function () {
        Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('profile', [AuthController::class, 'profile'])->name('profile');
    });
});
