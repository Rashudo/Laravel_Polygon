<?php


namespace App\DesignPatterns\Creational\Prototye;


class Client
{
    public $id;

    public $name;

    /**
     * @var array Order
     */
    public $order = [];

    /**
     * Client constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function addOrder(Order $order)
    {
        $this->order[] = $order;
    }

    public function __toString()
    {
        return 'Количество заказов = ' . count($this->order);
    }
}
