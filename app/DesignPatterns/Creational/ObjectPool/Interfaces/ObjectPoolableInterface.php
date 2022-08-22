<?php


namespace App\DesignPatterns\Creational\ObjectPool\Interfaces;

/**
 * Interface ObjectPoolableInterface
 * @package App\DesignPatterns\Creational\ObjectPool\Interfaces
 */
interface ObjectPoolableInterface
{

    /**
     * @return mixed
     */
    public function __clone();
}
