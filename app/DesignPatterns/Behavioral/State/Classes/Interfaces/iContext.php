<?php


namespace App\DesignPatterns\Behavioral\State\Classes\Interfaces;

/**
 * Interface iContext
 * @package App\DesignPatterns\Behavioral\State\Classes\Interfaces
 */
interface iContext
{
    public function setState(iState $state): void;
}
