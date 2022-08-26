<?php


namespace App\DesignPatterns\Behavioral\State\Classes\Interfaces;


/**
 * Interface iState
 * @package App\DesignPatterns\Behavioral\State\Classes\Interfaces
 */
interface iState
{

    /**
     * @param iContext $context
     * @return void
     */
    public function setContext(iContext $context): void;

    /**
     * @return string
     */
    public function action1(): string;

    /**
     * @return string
     */
    public function action2(): string;
}
