<?php


namespace App\DesignPatterns\Structural\Composite\Classes;


use App\DesignPatterns\Structural\Composite\Interfaces\iHavePrice;

class Item implements iHavePrice
{
    /**
     * @var array
     */
    public $toppings = [];

    private $price = 0;

    /**
     * Topping constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->price = $id * 100;
    }

    /**
     * @param Topping $topping
     */
    public function addTopping(Topping $topping)
    {
        $this->toppings[] = $topping;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        $top_price = 0;
        foreach ($this->toppings as $top) {
            /** @var $top Topping */
            $top_price += $top->getPrice();
        }
        return $top_price + $this->price;
    }
}
