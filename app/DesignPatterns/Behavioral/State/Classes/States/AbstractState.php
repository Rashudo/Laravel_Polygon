<?php


namespace App\DesignPatterns\Behavioral\State\Classes\States;


use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iContext;
use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iState;

abstract class AbstractState implements iState
{

    /**
     * @var iContext
     */
    protected iContext $context;

    /**
     * @param iContext $context
     * @return void
     */
    public function setContext(iContext $context): void
    {
        $this->context = $context;
    }

    abstract public function action1(): string;

    abstract public function action2(): string;
}
