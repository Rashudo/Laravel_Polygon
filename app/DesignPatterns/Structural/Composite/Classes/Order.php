<?php


namespace App\DesignPatterns\Structural\Composite\Classes;


use App\DesignPatterns\Structural\Composite\Interfaces\iHavePrice;

class Order implements iHavePrice
{
    /**
     * @var array
     */
    public $items = [];

    public $price = 0;

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
