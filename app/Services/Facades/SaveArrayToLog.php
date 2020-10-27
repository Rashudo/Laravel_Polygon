<?php


namespace App\Services\Facades;


use Illuminate\Support\Facades\Facade;


/**
 * @method static bool save(array $array)
 *
 * @see \App\Services\SaveArrayToLog
 */
class SaveArrayToLog extends Facade
{


    protected static function getFacadeAccessor()
    {
        return 'SaveArrayToLog';
    }

}
