<?php


namespace App\DesignPatterns\Creational\Builder\Interfaces;

use App\DesignPatterns\Creational\Builder\Classes\Order;

/**
 * Interface OrderBuilderInterface
 * @package App\DesignPatterns\Creational\Builder\Interfaces
 */
interface OrderBuilderInterface
{

    /**
     * @return OrderBuilderInterface
     */
    public function create(): OrderBuilderInterface;

    /**
     * @param $source
     * @return OrderBuilderInterface
     */
    public function setSource($source): OrderBuilderInterface;

    /**
     * @param $sum
     * @return OrderBuilderInterface
     */
    public function setSum($sum): OrderBuilderInterface;

    /**
     * @return Order
     */
    public function getOrder(): Order;
}
