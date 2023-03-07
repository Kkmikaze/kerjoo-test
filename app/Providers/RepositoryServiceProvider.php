<?php

namespace App\Providers;

use App\Interfaces\AnnualLeaveRepositoryInterface;
use App\Repositories\AnnualLeaveRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AnnualLeaveRepositoryInterface::class, AnnualLeaveRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
