<?php

use App\Http\Controllers\PractionerController;
use Illuminate\Support\Facades\Route;

Route::as('practioner.')->prefix('backoffice/practioner')->group(function () {
    Route::resource('', PractionerController::class);
});
