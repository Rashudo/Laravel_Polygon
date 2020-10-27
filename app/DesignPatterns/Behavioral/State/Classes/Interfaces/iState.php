<?php


namespace App\DesignPatterns\Behavioral\State\Classes\Interfaces;


use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iContext;

interface iState
{

    /**
     * @param iContext $context
     * @return mixed
     */
    public function setContext(iContext $context);

    public function action1(): string;

    public function action2(): string;
}
