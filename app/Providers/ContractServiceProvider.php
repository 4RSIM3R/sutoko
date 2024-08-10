<?php

namespace App\Providers;

use App\Contract\BaseContract;
use App\Contract\EncounterContract;
use App\Contract\LocationContract;
use App\Contract\OrganizationContract;
use App\Contract\PatientContract;
use App\Contract\PractionerContract;
use App\Service\BaseService;
use App\Service\EncounterService;
use App\Service\LocationService;
use App\Service\OrganizationService;
use App\Service\PatientService;
use App\Service\PractionerService;
use Illuminate\Support\ServiceProvider;

class ContractServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseContract::class, BaseService::class);
        $this->app->bind(PractionerContract::class, PractionerService::class);
        $this->app->bind(PatientContract::class, PatientService::class);
        $this->app->bind(EncounterContract::class, EncounterService::class);
        $this->app->bind(LocationContract::class, LocationService::class);
        $this->app->bind(OrganizationContract::class, OrganizationService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
