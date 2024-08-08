<?php

use App\Http\Controllers\BackofficeController;
use Illuminate\Support\Facades\Route;

Route::as('backoffice.')->prefix('backoffice')->group(function () {
    Route::get('', [BackofficeController::class, 'index'])->name('index');
});
