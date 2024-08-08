<?php

namespace App\Providers;

use App\Contract\BaseContract;
use App\Contract\PractionerContract;
use App\Service\BaseService;
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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
