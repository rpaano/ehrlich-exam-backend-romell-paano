<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::delete('logout', [AuthController::class, 'logout']);
Route::put('refresh', [AuthController::class, 'refresh']);
Route::post('login', [AuthController::class, 'login']);
