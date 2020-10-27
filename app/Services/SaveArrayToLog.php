<?php


namespace App\Services;


use App\Services\Contracts\SaveArrayLog;

class SaveArrayToLog implements SaveArrayLog
{

    public static function save(array $array): bool
    {
        logger()->debug(self::createString($array));
        return true;
    }

    public static function createString(array $array): string
    {

        $return = PHP_EOL . '=====================' . PHP_EOL;
        foreach ($array as $key => $value) {
            $return .= $key . ' => ' . $value . PHP_EOL;
        }
        $return .= '====================='  . PHP_EOL;
        return $return;
    }
}
