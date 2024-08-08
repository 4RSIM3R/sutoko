<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::as('auth.')->prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'store'])->name('store');
});