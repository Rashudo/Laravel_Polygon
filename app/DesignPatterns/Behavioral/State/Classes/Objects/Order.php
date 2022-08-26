<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Classes\Objects;


use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iContext;
use App\DesignPatterns\Behavioral\State\Classes\Interfaces\iState;

/**
 * Class Order
 * @package App\DesignPatterns\Behavioral\State\Classes\Objects
 */
final class Order implements iContext
{
    /**
     * @var iState
     */
    public iState $state;

    /**
     * @param iState $state
     * @return void
     */
    public function setState(iState $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    /**
     * @return string
     */
    public function handle1(): string
    {
        return $this->state->action1();
    }

    /**
     * @return string
     */
    public function handle2(): string
    {
        return $this->state->action2();
    }
}
