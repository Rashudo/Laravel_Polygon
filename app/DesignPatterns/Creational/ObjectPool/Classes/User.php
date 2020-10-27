<?php


namespace App\DesignPatterns\Creational\ObjectPool\Classes;


use App\DesignPatterns\Creational\ObjectPool\Interfaces\ObjectPoolableInterface;

class User implements ObjectPoolableInterface
{

    /**
     * @var
     */
    public $name;



    public function __clone()
    {
        // TODO: Implement __clone() method
    }


    public function __toString()
    {
        return __CLASS__ . ' | name => ' . $this->name;
    }
}
