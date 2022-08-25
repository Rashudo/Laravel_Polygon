<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator\OrderDecorator;


use App\DesignPatterns\Structural\Decorator\Interfaces\iOrder;
use App\Models\Order;

/**
 * Class BaseDecorator
 * @package App\DesignPatterns\Structural\Decorator\OrderDecorator
 */
abstract class BaseDecorator implements iOrder
{

    /**
     * @var iOrder
     */
    protected iOrder $model;

    /**
     * @param iOrder $model
     */
    public function __construct(iOrder $model)
    {
        $this->model = $model;
    }

    /**
     * @param Order $order
     * @return void
     */
    public function operate(Order $order): void
    {
        $this->model->operate($order);
    }
}
