<?php


namespace App\DesignPatterns\Creational\FactoryMethod\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

abstract class AbstractForm
{

    public function buildDoor()
    {
        $factoryKit = $this->getKit();
        $factoryKit->setMaster();
        $factoryKit->setDoor();
        return $factoryKit->getDescription();
    }


    abstract function getKit(): iFactory;


}
