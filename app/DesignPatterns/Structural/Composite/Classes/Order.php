<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Composite\Classes;


use App\DesignPatterns\Structural\Composite\Interfaces\iHavePrice;

/**
 * Class Item
 * @package App\DesignPatterns\Structural\Composite\Classes
 */
final class Order implements iHavePrice
{
    /**
     * @var array|Item[]
     */
    public array $items = [];

    public int $price = 0;

    /**
     * @param Item $item
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        $price = 0;
        /** @var $item Item */
        foreach ($this->items as $item) {
            $price += $item->getPrice();
        }
        return $price;
    }
}
