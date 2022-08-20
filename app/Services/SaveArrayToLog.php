<?php

declare(strict_types=1);

namespace App\Services;


use App\Services\Contracts\SaveArrayLog;

/**
 * Service example
 * Class SaveArrayToLog
 * @package App\Services
 */
final class SaveArrayToLog implements SaveArrayLog
{

    /**
     * @param array $array
     * @return bool
     */
    public static function save(array $array): bool
    {
        logger()->debug(self::createString($array));
        return true;
    }

    /**
     * @param array $array
     * @return string
     */
    public static function createString(array $array): string
    {
        $return = PHP_EOL . '=====================' . PHP_EOL;
        foreach ($array as $key => $value) {
            $return .= $key . ' => ' . $value . PHP_EOL;
        }
        $return .= '=====================' . PHP_EOL;
        return $return;
    }
}
