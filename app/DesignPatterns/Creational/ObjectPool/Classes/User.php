<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\ObjectPool\Classes;


use App\DesignPatterns\Creational\ObjectPool\Interfaces\ObjectPoolableInterface;

/**
 * Class CreditCard
 * @package App\DesignPatterns\Creational\ObjectPool\Classes
 */
final class User implements ObjectPoolableInterface
{

    /**
     * @var
     */
    public string $name;


    /**
     * @return mixed|void
     */
    public function __clone()
    {
        // TODO: Implement __clone() method
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ' | name => ' . $this->name;
    }
}
