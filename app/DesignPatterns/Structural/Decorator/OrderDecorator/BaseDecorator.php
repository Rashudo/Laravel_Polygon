<?php


namespace App\DesignPatterns\Structural\Decorator\OrderDecorator;


use App\DesignPatterns\Structural\Decorator\Interfaces\iOrder;
use App\Models\Order;

abstract class BaseDecorator implements iOrder
{

    /**
     * @var iOrder
     */
    protected $model;

    public function __construct(iOrder $model)
    {
        $this->model = $model;
    }

    public function operate(Order $order)
    {
        $this->model->operate($order);
    }
}
