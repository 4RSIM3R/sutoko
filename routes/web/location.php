<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

Route::as('location.')->prefix('backoffice/location')->group(function () {
    Route::resource('', LocationController::class);
});