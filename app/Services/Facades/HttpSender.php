<?php


namespace App\Services\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class HttpSender
 * @package App\Services\Facades
 */
class HttpSender extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'HttpSender';
    }

}
