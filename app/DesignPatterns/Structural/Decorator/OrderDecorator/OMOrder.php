<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\OrderDecorator;


use App\Models\Order;

/**
 * Class BaseDecorator
 * @package App\DesignPatterns\Structural\Decorator\OrderDecorator
 */
final class OMOrder extends BaseDecorator
{

    public function operate(Order $order): void
    {
        parent::operate($order);

        $order->recipients[] = 'OM';
    }
}
