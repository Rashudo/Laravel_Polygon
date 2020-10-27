<?php


namespace App\DesignPatterns\Structural\Decorator\Interfaces;


use App\Models\Order;

interface iOrder
{
    public function operate(Order $order);
}
