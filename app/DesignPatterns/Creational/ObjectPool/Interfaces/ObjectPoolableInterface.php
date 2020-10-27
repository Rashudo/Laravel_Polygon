<?php


namespace App\DesignPatterns\Creational\ObjectPool\Interfaces;


interface ObjectPoolableInterface
{

    /**
     * @return mixed
     */
    public function __clone();
}
