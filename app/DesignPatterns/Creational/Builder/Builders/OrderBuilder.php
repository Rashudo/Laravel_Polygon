<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder\Builders;


use App\DesignPatterns\Creational\Builder\Classes\Order;
use App\DesignPatterns\Creational\Builder\Interfaces\OrderBuilderInterface;

/**
 * Class OrderBuilder
 * @package App\DesignPatterns\Creational\Builder\Builders
 */
final class OrderBuilder implements OrderBuilderInterface
{
    /**
     * @var Order
     */
    private Order $order;

    /**
     * OrderBuilder constructor.
     */
    public function __construct()
    {
        $this->create();
    }


    /**
     * @return OrderBuilderInterface
     */
    public function create(): OrderBuilderInterface
    {
        $this->order = new Order();

        return $this;
    }

    /**
     * @param $source
     * @return OrderBuilderInterface
     */
    public function setSource($source): OrderBuilderInterface
    {
        $this->order->source = $source;

        return $this;
    }

    /**
     * @param $sum
     * @return OrderBuilderInterface
     */
    public function setSum($sum): OrderBuilderInterface
    {
        $this->order->sum = $sum;

        return $this;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        $result = $this->order; //Мы должны вернуть созданный объект
        $this->create();  //И очистить $this->order, чтобы можно было снова работать с билдером

        return $result;
    }

}
