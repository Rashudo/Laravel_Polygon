<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\AbstractFactory\Interfaces;

/**
 * Interface iDoor
 * @package App\DesignPatterns\Creational\AbstractFactory\Interfaces
 */
interface iDoor
{
    public function buildDoor(): string;
}
