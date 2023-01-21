<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:api']], function () {
    Route::delete('logout', [AuthController::class, 'logout']);
    Route::put('refresh', [AuthController::class, 'refresh']);
});

Route::group(['middleware' => ['guest']], function () {
    Route::post('login', [AuthController::class, 'login']);
});
