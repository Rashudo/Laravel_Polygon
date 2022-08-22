<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\FactoryMethod\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Factories\WoodenDoorFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

/**
 * Class WoodenDoor
 * @package App\DesignPatterns\Creational\FactoryMethod\Classes
 */
class WoodenDoor extends AbstractForm
{

    /**
     * @return iFactory
     */
    public function getKit(): iFactory
    {
        return new WoodenDoorFactory();
    }
}
