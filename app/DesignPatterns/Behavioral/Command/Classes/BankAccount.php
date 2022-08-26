<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command\Classes;


/**
 * Class BankAccount
 * @package App\DesignPatterns\Behavioral\Command\Classes
 */
final class BankAccount
{
    /**
     * @param string $name
     * @param int $balance
     */
    public function __construct(public string $name, public int $balance = 0)
    {
    }
}
