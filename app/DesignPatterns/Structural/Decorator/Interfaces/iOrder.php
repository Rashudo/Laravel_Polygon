<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\Interfaces;


use App\Models\Order;

/**
 * Interface iOrder
 * @package App\DesignPatterns\Structural\Decorator\Interfaces
 */
interface iOrder
{
    public function operate(Order $order);
}
