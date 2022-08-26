<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command\Commands;


use App\DesignPatterns\Behavioral\Command\Classes\BankAccount;
use App\DesignPatterns\Behavioral\Command\Interfaces\iCommand;

/**
 * Class WithdrawCommand
 * @package App\DesignPatterns\Behavioral\Command\Commands
 */
abstract class AbstractCommand implements iCommand
{
    /**
     * @var bool
     */
    public bool $status = false;


    /**
     * @param BankAccount $account
     * @param int $amount
     */
    public function __construct(
        protected BankAccount $account,
        protected int $amount)
    {
    }

    /**
     * @return string
     */
    public function returnAccountName(): string
    {
        return $this->account->name;
    }

    /**
     * @return int
     */
    public function returnAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return bool
     */
    public function returnStatus(): bool
    {
        return $this->status;
    }

    abstract function execute(): void;

    abstract function cancel(): void;
}
