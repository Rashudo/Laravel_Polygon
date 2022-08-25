<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\OrderDecorator;


use App\DesignPatterns\Structural\Decorator\Interfaces\iOrder;
use App\Models\Order;

/**
 * Class OrderBase
 * @package App\DesignPatterns\Structural\Decorator\OrderDecorator
 */
final class OrderBase implements iOrder
{
    public function __construct(Order $order)
    {
    }

    /**
     * @param Order $order
     * @return void
     */
    public function operate(Order $order): void
    {
        $order->recipients[] = 'DB';
    }
}
