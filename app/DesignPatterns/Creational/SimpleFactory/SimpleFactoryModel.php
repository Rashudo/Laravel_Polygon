<?php


namespace App\DesignPatterns\Creational\SimpleFactory;


use App\DesignPatterns\Fundamental\Delegation\Messengers\EmailMessenger;
use App\DesignPatterns\Fundamental\Delegation\Messengers\SmsMessenger;

class SimpleFactoryModel
{

    public function build(string $type = 'email')
    {
        $messenger = '';
        switch ($type) {
            case 'email':
                $messenger = new EmailMessenger();
                $messenger
                    ->setSender('test@test.ru')
                    ->setMessage('Hello Email');
                break;
            case 'sms':
                $messenger = new SmsMessenger();
                $messenger
                    ->setSender('+79261234567')
                    ->setMessage('Hello Phone');
                break;
            default:
                logger()->error("Неизвестный тип фабрики [{$type}]");
        }

        return $messenger;
    }

    public static function getName()
    {
        return 'Простая фабрика';
    }

    public static function getDescription()
    {
        return '
            То же самое, что и статическая фабрика, только не статическая.<br />
            Не путать с общим определением фабрики.<br /><br />
            Создается экземпляр класса какой-то фабрики, у неё есть метод build, в котором есть switch..case директива, которая создает как-то сложно какие-то классы и вызывает их экземпляр.
            ';
    }
}
