<?php


namespace App\DesignPatterns\Structural\Decorator\OrderDecorator;


use App\Models\Order;

class OMOrder extends BaseDecorator
{

    public function operate(Order $order)
    {
        parent::operate($order);

        $order->recipients[] = 'OM';
    }
}
