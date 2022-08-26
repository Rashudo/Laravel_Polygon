<?php


namespace App\DesignPatterns\Behavioral\Observer;


use App\DesignPatterns\Behavioral\Observer\Classes\UserRepository;
use App\DesignPatterns\Behavioral\Observer\Observers\Logger;
use App\DesignPatterns\Behavioral\Observer\Observers\SmsNotifications;

class ObserverModel
{

    public function run(): array
    {
        $repository = new UserRepository();
        $loggerObserver = new Logger();
        $smsObserver = new SmsNotifications();
        $repository->attach($loggerObserver);
        $repository->attach($smsObserver, 'users:created');

        $repository->initialize(__DIR__ . "/users.csv");

        $user = $repository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);

        $repository->deleteUser($user);
        return array_merge($loggerObserver->log, $smsObserver->log);
    }


    public static function getName(): string
    {
        return 'Наблюдатель';
    }

    public static function getDescription(): string
    {
        return '
        <b>Наблюдатель</b> это поведенческий паттерн, который позволяет объектам оповещать другие объекты об изменениях своего состояния.<br />
        <i>refactoring.guru</i><br /><br />

        Есть субъект, который выполняет какую-то важную логику. После этого выполнения нужно оповестить подписчиков, что действие совершилось, ну или что начало совершаться. <br />
        Уже есть встроенные интерфейсы для реализации этого паттерна \SplSubject - для субъекта, который выполняет логику, и \SplObserver - для наблюдателя
        ';
    }
}
