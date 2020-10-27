<?php


namespace App\DesignPatterns\Creational\FactoryMethod\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Factories\WoodenDoorFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

class WoodenDoor extends AbstractForm
{

    public function getKit(): iFactory
    {
        return new WoodenDoorFactory();
    }
}
