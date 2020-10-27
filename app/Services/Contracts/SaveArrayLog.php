<?php


namespace App\Services\Contracts;

/**
 * Interface SaveArrayLog
 * @package App\Services\Contracts
 */
interface SaveArrayLog
{

    /**
     * save data to log
     *
     * @param array $array
     * @return bool
     */
    public static function save(array $array): bool;

    /**
     * create string from array
     *
     * @param array $array
     * @return string
     */
    public static function createString(array $array): string;
}
