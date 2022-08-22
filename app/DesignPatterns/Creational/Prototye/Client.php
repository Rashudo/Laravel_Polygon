<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Prototye;

/**
 * Class Client
 * @package App\DesignPatterns\Creational\Prototye
 */
class Client
{
    /**
     * @var array Order
     */
    public array $order = [];

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(
        public int $id,
        public string $name
    ) {
    }

    public function addOrder(Order $order): void
    {
        $this->order[] = $order;
    }

    public function __toString()
    {
        return 'Количество заказов = ' . count($this->order);
    }
}
