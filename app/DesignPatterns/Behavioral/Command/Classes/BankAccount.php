<?php


namespace App\DesignPatterns\Behavioral\Command\Classes;


class BankAccount
{
    public $name;

    public $balance = 0;

    public function __construct(string $name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
}
