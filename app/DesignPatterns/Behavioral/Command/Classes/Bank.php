<?php


namespace App\DesignPatterns\Behavioral\Command\Classes;


use App\DesignPatterns\Behavioral\Command\Interfaces\iCommand;
use App\DesignPatterns\Behavioral\Command\Commands\{IncomeCommand, WithdrawCommand};

class Bank
{
    /**
     * @var array of iCommand
     */
    private $commands = [];

    public function __construct()
    {

    }

    public function operate(BankAccount $account, $amount)
    {
        if ($amount < 0) {
            $command = new WithdrawCommand($account, abs($amount));
        } else {
            $command = new IncomeCommand($account, abs($amount));
        }
        $command->execute();
        array_push($this->commands, $command);
    }

    public function cancel($num)
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
            $results[$i] .= $command->returnAccountName() . ' на ' . $command->returnAmount() . 'руб.' . ' Статус операции: ' . (($command->returnStatus()) ? 'проведена' : 'отменена');
            ++$i;
        }
        return $results;
    }
}
