<?php 

use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::as('organization.')->prefix('backoffice/organization')->middleware(['auth'])->group(function () {
    Route::resource('', OrganizationController::class);
});