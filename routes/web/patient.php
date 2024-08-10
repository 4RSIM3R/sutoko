<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::as('patient.')->prefix('backoffice/patient')->middleware(['auth'])->group(function () {
    Route::resource('', PatientController::class);
});