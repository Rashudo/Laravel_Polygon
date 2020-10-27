<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HttpSender extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HttpSender', function () {
            return new \App\Services\HttpSender();
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
