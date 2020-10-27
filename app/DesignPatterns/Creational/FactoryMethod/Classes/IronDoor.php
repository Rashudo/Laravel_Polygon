<?php


namespace App\DesignPatterns\Creational\FactoryMethod\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Factories\IronDoorFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

class IronDoor extends AbstractForm
{

    public function getKit(): iFactory
    {
        return new IronDoorFactory();
    }
}
