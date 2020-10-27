<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Factories;


use App\DesignPatterns\Creational\AbstractFactory\Classes\WoodenDoor;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

class IronDoorFactory implements iFactory
{
    public $master;

    public $door;


    public function setDoor()
    {
        $this->door = (new WoodenDoor())->buildDoor();
    }

    public function setMaster()
    {


        $this->master = 'Мастер Железной Двери';
    }

    public function getDescription()
    {
        $return = 'Установленная дверь: ' . $this->door . '. ';
        $return .= 'Мастер: ' . $this->master . '.';
        return $return;
    }
}
