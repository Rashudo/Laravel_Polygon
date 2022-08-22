<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Interfaces;

/**
 * Interface iFactory
 * @package App\DesignPatterns\Creational\AbstractFactory\Interfaces
 */
interface iFactory
{

    /**
     * @return void
     */
    public function setDoor(): void;

    /**
     * @return void
     */
    public function setMaster(): void;

    /**
     * @return string
     */
    public function getDescription(): string;
}
