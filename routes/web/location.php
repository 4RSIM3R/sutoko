<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

Route::as('location.')->prefix('backoffice/location')->middleware(['auth'])->group(function () {
    Route::get('search', [LocationController::class, 'search'])->name('search');
    Route::resource('', LocationController::class);
});
