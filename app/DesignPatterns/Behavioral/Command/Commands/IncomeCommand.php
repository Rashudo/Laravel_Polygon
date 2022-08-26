<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command\Commands;

/**
 * Class WithdrawCommand
 * @package App\DesignPatterns\Behavioral\Command\Commands
 */
final class IncomeCommand extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->account->balance += $this->amount;
        $this->status = true;
    }

    /**
     * @return void
     */
    public function cancel(): void
    {
        $this->account->balance -= $this->amount;
        $this->status = false;
    }
}
