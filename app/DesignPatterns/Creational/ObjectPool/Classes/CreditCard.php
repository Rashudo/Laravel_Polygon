<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\ObjectPool\Classes;

use App\DesignPatterns\Creational\ObjectPool\Interfaces\ObjectPoolableInterface;

/**
 * Class CreditCard
 * @package App\DesignPatterns\Creational\ObjectPool\Classes
 */
final class CreditCard implements ObjectPoolableInterface
{

    /**
     * @var string
     */
    public string $number;

    /**
     * @var string
     */
    public string $date;

    /**
     * @var string
     */
    public string $cvc;


    /**
     * @return mixed|void
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ' | $number => ' . $this->number . ', $date => ' . $this->date . ', $cvc => ' . $this->cvc;
    }
}
