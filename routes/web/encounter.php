<?php

use App\Http\Controllers\EncounterController;
use Illuminate\Support\Facades\Route;

Route::as('encounter.')->prefix('backoffice/encounter')->middleware(['auth'])->group(function () {
    Route::resource('', EncounterController::class);
});
