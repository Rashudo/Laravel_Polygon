<?php


namespace App\DesignPatterns\Creational\ObjectPool\Classes;


use App\DesignPatterns\Creational\ObjectPool\Interfaces\ObjectPoolableInterface;

class CreditCard implements ObjectPoolableInterface
{

    /**
     * @var
     */
    public $number;

    /**
     * @var
     */
    public $date;

    /**
     * @var
     */
    public $cvc;


    public function __clone()
    {
        // TODO: Implement __clone() method.
    }


    public function __toString()
    {
        return __CLASS__ . ' | $number => ' . $this->number . ', $date => ' . $this->date . ', $cvc => ' . $this->cvc;
    }
}
