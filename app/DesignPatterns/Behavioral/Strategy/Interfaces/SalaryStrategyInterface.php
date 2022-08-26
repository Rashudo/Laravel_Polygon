<?php


namespace App\DesignPatterns\Behavioral\Strategy\Interfaces;

/**
 * Interface SalaryStrategyInterface
 * @package App\DesignPatterns\Behavioral\Strategy\Interfaces
 */
interface SalaryStrategyInterface
{

    public function calc($period, $user): int;

    public function getName(): string;
}
