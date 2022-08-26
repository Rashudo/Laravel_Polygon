<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command;


use App\DesignPatterns\Behavioral\Command\Classes\Bank;
use App\DesignPatterns\Behavioral\Command\Classes\BankAccount;

/**
 * Class CommandModel
 * @package App\DesignPatterns\Behavioral\Command
 */
final class CommandModel
{

    public static function getName(): string
    {
        return 'Команда';
    }

    public static function getDescription(): string
    {
        return '
        <b>Команда</b> это поведенческий паттерн проектирования, который превращает запросы в объекты, позволяя передавать их как аргументы при вызове методов, ставить запросы в очередь, логировать их, а также поддерживать отмену операций.<br />
        <i>refactoring.guru</i><br /><br />

        Смысл в том, что объекты - это некие команды, у них общий интерфейс, они могут что-то делать, логгируют события, могут откатываться. <br />
        Объекты эти помещаются в БД (сериализируются) некой очередью, после этого дергаются (выполняются). Могут дергаться на откат действия и т.д.<br /><br />

        Хороший пример - это пакетные зачилсения или списания на банковском счете.<br />
        Есть объект - BankAccount (Receiver), там хранятся данные о человеке и его счете. Есть Bank (Invoker), у которого есть какие-то операции, эти операции выведены в отдельные классы (WithdrawCommand, IncomeCommand), кто-то дергает у банка метод operate || cancel. <br />
        Дернули operate, создался определенный класс команды, команда выполнилась, дальше Bank должен сохранить сериализованный объект в БД, например. Если надо эту операцию отменить, дергается cancel, команда десериализуется и отменяется.<br />
        Все сохраняется в лог, можно делать отложенным выполнение компанд, можно повторять компанды и тд. Всё это благодаря тому, что команды сохранены как объекты.
        ';
    }

    /**
     * @return array
     */
    public function run(): array
    {
        $bank = new Bank();
        $acc1 = new BankAccount('Вася', 0);
        $acc2 = new BankAccount('Петя', 0);

        $bank->operate($acc1, 1000);
        $bank->operate($acc2, 2000);

        $bank->operate($acc1, -100);
        $bank->operate($acc1, -150);

        $bank->operate($acc2, -500);

        $bank->operate($acc1, 300);


        $bank->operate($acc1, 300);
        $bank->operate($acc2, 300);
        $bank->cancel(2);

        return array_merge($bank->showOperations(), [
            'Баланс ' . $acc1->name . ' = ' . $acc1->balance . 'руб.',
            'Баланс ' . $acc2->name . ' = ' . $acc2->balance . 'руб.'
        ]);
    }
}
