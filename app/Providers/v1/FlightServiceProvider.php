<?php

namespace App\Providers\v1;

use App\Services\v1;
use Illuminate\Support\ServiceProvider;

class FlightServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FlightService::class, function($app){
            return new FlightService();
        });
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
