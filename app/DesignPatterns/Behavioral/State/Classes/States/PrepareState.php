<?php


namespace App\DesignPatterns\Behavioral\State\Classes\States;


class PrepareState extends AbstractState
{

    public function action1(): string
    {
        return class_basename($this) . ' => ' . __METHOD__;
    }

    public function action2(): string
    {
        $this->context->setState(new SendState());
        return class_basename($this) . ' => ' . __METHOD__;
    }
}
