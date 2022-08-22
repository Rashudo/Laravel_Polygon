<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder\Builders;


use App\DesignPatterns\Creational\Builder\Classes\Order;
use App\DesignPatterns\Creational\Builder\Interfaces\OrderBuilderInterface;

/**
 * Class OrderBuilder
 * @package App\DesignPatterns\Creational\Builder\Builders
 */
final class OrderManager
{
    /**
     * @var OrderBuilderInterface
     */
    private OrderBuilderInterface $builder;

    /**
     * OrderManager constructor.
     * @param OrderBuilderInterface $builder
     */
    public function __construct(OrderBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return Order
     */
    public function createCleanOrder(): Order
    {
        return $this->builder->getOrder();
    }


    /**
     * @return Order
     */
    public function createOrderFromApi(): Order
    {
        $order = $this->builder
            ->setSource('api')
            ->setSum(100)
            ->getOrder();
        //Может быть еще какая логика или куча сеттеров
        return $order;
    }

    /**
     * @return Order
     */
    public function createOrderFromSite(): Order
    {
        $order = $this->builder
            ->setSource('site')
            ->setSum(650)
            ->getOrder();
        //Может быть еще какая логика или куча сеттеров
        return $order;
    }
}
