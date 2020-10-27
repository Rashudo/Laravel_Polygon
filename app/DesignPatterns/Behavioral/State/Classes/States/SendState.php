<?php


namespace App\DesignPatterns\Behavioral\State\Classes\States;


class SendState extends AbstractState
{

    public function action1(): string
    {
        return class_basename($this) . ' => ' . __METHOD__;
    }

    public function action2(): string
    {
        return class_basename($this) . ' => ' . __METHOD__;
    }
}
