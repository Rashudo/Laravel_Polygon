<?php


namespace App\Services\Facades;


use Illuminate\Support\Facades\Facade;

class HttpSender extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'HttpSender';
    }

}
