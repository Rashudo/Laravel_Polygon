<?php


namespace App\DesignPatterns\Behavioral\Command\Commands;


use App\DesignPatterns\Behavioral\Command\Interfaces\iCommand;
use App\DesignPatterns\Behavioral\Command\Classes\BankAccount;

abstract class AbstractCommand implements iCommand
{
    public $account;

    /**
     * @var int
     */
    public $amount = 0;

    /**
     * @var bool
     */
    public $status = false;


    /**
     * AbstractCommand constructor.
     * @param BankAccount $account
     * @param $amount
     */
    public function __construct(BankAccount $account, $amount)
    {
        $this->account = $account;
        $this->amount = $amount;
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
