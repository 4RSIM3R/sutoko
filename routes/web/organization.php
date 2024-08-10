<?php 

use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::as('organization.')->prefix('backoffice/organization')->group(function () {
    Route::resource('organization', OrganizationController::class);
});