<?php


namespace App\DesignPatterns\Creational\Builder\Builders;


use App\DesignPatterns\Creational\Builder\Classes\Order;
use App\DesignPatterns\Creational\Builder\Interfaces\OrderBuilderInterface;

class OrderBuilder implements OrderBuilderInterface
{
    /**
     * @var Order
     */
    private $order;

    /**
     * OrderBuilder constructor.
     */
    public function __construct()
    {
        $this->create();
    }


    public function create(): OrderBuilderInterface
    {
        $this->order = new Order();

        return $this;
    }

    public function setSource($source): OrderBuilderInterface
    {
        $this->order->source = $source;

        return $this;
    }

    public function setSum($sum): OrderBuilderInterface
    {
        $this->order->sum = $sum;

        return $this;
    }

    public function getOrder(): Order
    {
        $result = $this->order; //Мы должны вернуть созданный объект
        $this->create();  //И очистить $this->order, чтобы можно было снова работать с билдером

        return $result;
    }

}
