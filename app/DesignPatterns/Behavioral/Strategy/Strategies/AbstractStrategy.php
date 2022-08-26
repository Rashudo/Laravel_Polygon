<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Strategy\Strategies;


use App\DesignPatterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;

/**
 * Class CourierAutoStrategy
 * @package App\DesignPatterns\Behavioral\Strategy\Strategies
 */
abstract class AbstractStrategy implements SalaryStrategyInterface
{
    /**
     * @param $period
     * @param $user
     * @return int
     */
    public function calc($period, $user): int
    {
        return rand(500, 2000);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return class_basename(static::class);
    }

}
