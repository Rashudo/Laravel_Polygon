<?php


namespace App\DesignPatterns\Structural\Facade\Subsystem;


use App\Models\Order;

class AbstractOrderSave
{
    /**
     * @var Order
     */
    public $order;

    /**
     * @var array
     */
    public $data;

    public function __construct(Order &$order, array &$data)
    {
        $this->order = $order;
        $this->data = $data;
    }

    public function run()
    {
        return static::class;
    }
}
