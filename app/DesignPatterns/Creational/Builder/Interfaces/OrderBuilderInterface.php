<?php


namespace App\DesignPatterns\Creational\Builder\Interfaces;


interface OrderBuilderInterface
{

    public function create(): OrderBuilderInterface;

    public function setSource($source): OrderBuilderInterface;

    public function setSum($sum): OrderBuilderInterface;

    public function getOrder(): \App\DesignPatterns\Creational\Builder\Classes\Order;
}
