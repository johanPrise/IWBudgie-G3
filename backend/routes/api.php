<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ForecastController;

// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::get('/profile', [AuthController::class, 'profile']);
//
//     Route::apiResource('accounts', AccountController::class);
//     Route::apiResource('expenses', ExpenseController::class);
//     Route::apiResource('incomes', IncomeController::class);
//
//     Route::get('/forecasts/{account}', [ForecastController::class, 'show']);
// });
