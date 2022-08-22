<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\SimpleFactory;


use App\DesignPatterns\Fundamental\Delegation\Messengers\EmailMessenger;
use App\DesignPatterns\Fundamental\Delegation\Messengers\SmsMessenger;

/**
 * Class SimpleFactoryModel
 * @package App\DesignPatterns\Creational\SimpleFactory
 */
class SimpleFactoryModel
{

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Простая фабрика';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
            То же самое, что и статическая фабрика, только не статическая.<br />
            Не путать с общим определением фабрики.<br /><br />
            Создается экземпляр класса какой-то фабрики, у неё есть метод build, в котором есть switch..case директива, которая создает как-то сложно какие-то классы и вызывает их экземпляр.
            ';
    }

    /**
     * @param string $type
     * @return EmailMessenger|string|SmsMessenger
     */
    public function build(string $type = 'email'): EmailMessenger|string|SmsMessenger
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
}
