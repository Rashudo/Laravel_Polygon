<?php


namespace App\DesignPatterns\Structural\Proxy\Interfaces;

/**
 * Interface iDb
 * @package App\DesignPatterns\Structural\Proxy\Interfaces
 */
interface iDb
{

    /**
     * @return bool
     */
    public function save(): bool;

    /**
     * @return array
     */
    public function get(): array;
}
