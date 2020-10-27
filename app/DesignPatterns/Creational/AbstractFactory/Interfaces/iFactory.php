<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Interfaces;


interface iFactory
{

    public function setDoor();

    public function setMaster();

    public function getDescription();
}
