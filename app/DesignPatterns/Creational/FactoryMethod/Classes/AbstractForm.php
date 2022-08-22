<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\FactoryMethod\Classes;


use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

/**
 * Class AbstractForm
 * @package App\DesignPatterns\Creational\FactoryMethod\Classes
 */
abstract class AbstractForm
{

    /**
     * @return string
     */
    public function buildDoor(): string
    {
        $factoryKit = $this->getKit();
        $factoryKit->setMaster();
        $factoryKit->setDoor();
        return $factoryKit->getDescription();
    }


    /**
     * @return iFactory
     */
    abstract function getKit(): iFactory;
}
