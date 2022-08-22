<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder\Classes;

/**
 * Class Order
 * @package App\DesignPatterns\Creational\Builder\Classes
 */
final class Order
{

    /**
     * @var string
     */
    public string $source;

    /**
     * @var int
     */
    public int $sum = 0;
}
