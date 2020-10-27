<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Factories;


use App\DesignPatterns\Creational\AbstractFactory\Classes\IronDoor;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

class WoodenDoorFactory implements iFactory
{
    public $master;

    public $door;

    public function setDoor()
    {
        $this->door = (new IronDoor())->buildDoor();

    }

    public function setMaster()
    {
        $this->master = 'Мастер Деревянной Двери';
    }

    public function getDescription()
    {
        $return = 'Установленная дверь: ' . $this->door . '. ';
        $return .= 'Мастер: ' . $this->master . '.';
        return $return;
    }
}
