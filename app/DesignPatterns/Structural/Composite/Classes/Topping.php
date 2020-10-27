<?php


namespace App\DesignPatterns\Structural\Composite\Classes;


use App\DesignPatterns\Structural\Composite\Interfaces\iHavePrice;

class Topping implements iHavePrice
{
    private $price = 0;

    /**
     * Topping constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->price = $id * 10;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
