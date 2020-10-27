<?php


namespace App\DesignPatterns\Behavioral\Command\Commands;


class WithdrawCommand extends AbstractCommand
{

    public function execute(): void
    {
        $this->account->balance -= $this->amount;
        $this->status = true;
    }

    public function cancel(): void
    {
        $this->account->balance += $this->amount;
        $this->status = false;
    }
}
