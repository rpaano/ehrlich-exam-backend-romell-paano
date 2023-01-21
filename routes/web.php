<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/redirect', [AuthController::class, 'redirect']);
Route::get('/auth/callback', [AuthController::class, 'callback']);
