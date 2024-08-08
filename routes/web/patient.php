<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::as('patient.')->prefix('backoffice/patient')->group(function () {
    Route::resource('patient', PatientController::class);
});