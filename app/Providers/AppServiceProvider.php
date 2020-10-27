<?php

namespace App\Providers;

use App\DesignPatterns\Structural\Adapter\Classes\LibsAdapter;
use App\DesignPatterns\Structural\Adapter\Interfaces\SelfWrittenInterface;
use App\Services\Contracts\HttpSender;
use App\Services\HttpSender as SenderClass;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        SelfWrittenInterface::class => LibsAdapter::class,
        HttpSender::class => SenderClass::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
