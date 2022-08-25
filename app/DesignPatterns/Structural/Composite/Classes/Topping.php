<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Composite\Classes;


use App\DesignPatterns\Structural\Composite\Interfaces\iHavePrice;

/**
 * Class Item
 * @package App\DesignPatterns\Structural\Composite\Classes
 */
final class Topping implements iHavePrice
{
    private int|float $price = 0;

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
