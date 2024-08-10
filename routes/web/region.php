<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

Route::as('region.')->prefix('region')->group(function () {
    Route::get('province', [RegionController::class, 'province']);
    Route::get('regency', [RegionController::class, 'regency']);
    Route::get('district', [RegionController::class, 'district']);
});