<?php

use App\Http\Controllers\PractionerController;
use Illuminate\Support\Facades\Route;

Route::as('practioner.')->prefix('backoffice/practioner')->middleware(['auth'])->group(function () {
    Route::get('search', [PractionerController::class, 'search'])->name('search');
    Route::resource('', PractionerController::class);
});
