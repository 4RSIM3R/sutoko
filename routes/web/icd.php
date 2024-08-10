<?php

use App\Http\Controllers\Icd10Controller;
use App\Http\Controllers\Icd9Controller;
use Illuminate\Support\Facades\Route;

Route::as('icd9.')->prefix('icd9')->middleware(['auth'])->group(function () {
    Route::resource('', Icd9Controller::class);
});

Route::as('icd10.')->prefix('icd10')->middleware(['auth'])->group(function () {
    Route::resource('', Icd10Controller::class);
});
