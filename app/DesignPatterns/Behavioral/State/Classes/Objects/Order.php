<?php


namespace App\DesignPatterns\Behavioral\State\Classes\Objects;


use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iContext;
use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iState;

class Order implements iContext
{
    /**
     * @var iState
     */
    public $state;

    public function setState(iState $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function handle1()
    {
        return $this->state->action1();
    }

    public function handle2()
    {
        return $this->state->action2();
    }
}
