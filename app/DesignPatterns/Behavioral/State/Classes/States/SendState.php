<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Classes\States;

/**
 * Class PrepareState
 * @package App\DesignPatterns\Behavioral\State\Classes\States
 */
final class SendState extends AbstractState
{

    /**
     * @return string
     */
    public function action1(): string
    {
        return class_basename($this) . ' => ' . __METHOD__;
    }

    /**
     * @return string
     */
    public function action2(): string
    {
        return class_basename($this) . ' => ' . __METHOD__;
    }
}
