<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Factories;


use App\DesignPatterns\Creational\AbstractFactory\Classes\IronDoor;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

final class WoodenDoorFactory implements iFactory
{
    /**
     * @var string $master
     */
    public string $master;

    /**
     * @var string $door
     */
    public string $door;

    /**
     * @return void
     */
    public function setDoor(): void
    {
        $this->door = (new IronDoor())->buildDoor();
    }

    /**
     * @return void
     */
    public function setMaster(): void
    {
        $this->master = 'Мастер Деревянной Двери';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        $return = 'Установленная дверь: ' . $this->door . '. ';
        $return .= 'Мастер: ' . $this->master . '.';
        return $return;
    }
}
