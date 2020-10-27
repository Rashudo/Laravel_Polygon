<?php


namespace App\DesignPatterns\Behavioral\State\Classes\States;


use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iContext;
use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iState;

abstract class AbstractState implements iState
{

    /**
     * @var iContext
     */
    protected $context;

    public function setContext(iContext $context)
    {
        $this->context = $context;
    }

    abstract public function action1(): string;

    abstract public function action2(): string;
}
