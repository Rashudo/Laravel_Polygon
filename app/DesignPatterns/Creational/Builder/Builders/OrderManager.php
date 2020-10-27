<?php


namespace App\DesignPatterns\Creational\Builder\Builders;


use App\DesignPatterns\Creational\Builder\Classes\Order;
use App\DesignPatterns\Creational\Builder\Interfaces\OrderBuilderInterface;

class OrderManager
{
    /**
     * @var OrderBuilderInterface
     */
    private $builder;

    public function __construct(OrderBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function createCleanOrder(): Order
    {
        return $this->builder->getOrder();
    }


    public function createOrderFromApi(): Order
    {

        $order = $this->builder
            ->setSource('api')
            ->getOrder();
        //Может быть еще какая логика или куча сеттеров
        return $order;
    }

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
