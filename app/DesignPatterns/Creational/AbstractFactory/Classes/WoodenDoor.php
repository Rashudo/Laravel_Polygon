<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\AbstractFactory\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iDoor;

/**
 * Class IronDoor
 * @package App\DesignPatterns\Creational\AbstractFactory\Classes
 */
class WoodenDoor implements iDoor
{

    public function buildDoor(): string
    {
        return __CLASS__;
    }

}
