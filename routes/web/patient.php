<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::as('patient.')->prefix('backoffice/patient')->middleware(['auth'])->group(function () {
    Route::get('search', [PatientController::class, 'search'])->name('search');
    Route::resource('', PatientController::class);
});