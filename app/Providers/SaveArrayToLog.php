<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SaveArrayToLog extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SaveArrayToLog', function () {
            return new \App\Services\SaveArrayToLog();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
