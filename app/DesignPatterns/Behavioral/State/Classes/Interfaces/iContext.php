<?php


namespace App\DesignPatterns\Behavioral\State\Classes\Interfaces;


interface iContext
{

    public function setState(iState $state): void;
}
