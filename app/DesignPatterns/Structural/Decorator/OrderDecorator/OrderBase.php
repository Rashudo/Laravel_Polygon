<?php


namespace App\DesignPatterns\Structural\Decorator\OrderDecorator;


use App\DesignPatterns\Structural\Decorator\Interfaces\iOrder;
use App\Models\Order;

class OrderBase implements iOrder
{
    public function __construct(Order $order)
    {
    }

    public function operate(Order $order)
    {
        $order->recipients[] = 'DB';
    }
}
