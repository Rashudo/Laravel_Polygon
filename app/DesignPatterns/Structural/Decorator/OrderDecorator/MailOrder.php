<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\OrderDecorator;


use App\Models\Order;

/**
 * Class OrderBase
 * @package App\DesignPatterns\Structural\Decorator\OrderDecorator
 */
final class MailOrder extends BaseDecorator
{
    /**
     * @param Order $order
     * @return void
     */
    public function operate(Order $order): void
    {
        parent::operate($order);
        $order->recipients[] = 'MAIL';
    }
}
