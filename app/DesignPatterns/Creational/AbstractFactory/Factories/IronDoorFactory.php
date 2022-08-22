<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\AbstractFactory\Factories;


use App\DesignPatterns\Creational\AbstractFactory\Classes\WoodenDoor;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

/**
 * Class WoodenDoorFactory
 * @package App\DesignPatterns\Creational\AbstractFactory\Factories
 */
final class IronDoorFactory implements iFactory
{
    /**
     * @var string
     */
    public string $master;

    /**
     * @var string
     */
    public string $door;


    /**
     * @return void
     */
    public function setDoor(): void
    {
        $this->door = (new WoodenDoor())->buildDoor();
    }

    /**
     * @return void
     */
    public function setMaster(): void
    {
        $this->master = 'Мастер Железной Двери';
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
