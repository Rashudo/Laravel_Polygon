<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command\Classes;


use App\DesignPatterns\Behavioral\Command\Commands\{IncomeCommand, WithdrawCommand};
use App\DesignPatterns\Behavioral\Command\Interfaces\iCommand;

/**
 * Class Bank
 * @package App\DesignPatterns\Behavioral\Command\Classes
 */
final class Bank
{
    /**
     * @var array of iCommand
     */
    private array $commands = [];

    /**
     * @param BankAccount $account
     * @param $amount
     * @return void
     */
    public function operate(BankAccount $account, $amount): void
    {
        if ($amount < 0) {
            $command = new WithdrawCommand($account, abs($amount));
        } else {
            $command = new IncomeCommand($account, abs($amount));
        }
        $command->execute();
        $this->commands[] = $command;
    }

    /**
     * @param $num
     * @return void
     */
    public function cancel($num): void
    {
        for ($i = count($this->commands) - 1; $i >= count($this->commands) - $num; $i--) {
            $this->commands[$i]->cancel();
        }
    }

    /**
     * @return array
     */
    public function showOperations(): array
    {
        $results = [];
        $i = 0;
        foreach ($this->commands as $command) {
            /**
             * @var $command iCommand
             */
            if ($command instanceof WithdrawCommand) {
                $results[$i] = 'Списание для ';
            } else {
                $results[$i] = 'Зачисление для ';
            }
            $results[$i] .= $command->returnAccountName() . ' на ' . $command->returnAmount(
                ) . 'руб.' . ' Статус операции: ' . (($command->returnStatus()) ? 'проведена' : 'отменена');
            ++$i;
        }
        return $results;
    }
}
