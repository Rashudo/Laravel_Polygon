<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iDoor;

class IronDoor implements iDoor
{

    public function buildDoor()
    {
        return __CLASS__;
    }
}
