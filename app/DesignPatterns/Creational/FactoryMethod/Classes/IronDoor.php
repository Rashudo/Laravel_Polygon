<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\FactoryMethod\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Factories\IronDoorFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

/**
 * Class WoodenDoor
 * @package App\DesignPatterns\Creational\FactoryMethod\Classes
 */
class IronDoor extends AbstractForm
{

    public function getKit(): iFactory
    {
        return new IronDoorFactory();
    }
}
