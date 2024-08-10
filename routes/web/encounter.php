<?php

use App\Http\Controllers\EncounterController;
use Illuminate\Support\Facades\Route;

Route::as('encounter.')->prefix('backoffice/encounter')->group(function () {
    Route::resource('encounter', EncounterController::class);
});
