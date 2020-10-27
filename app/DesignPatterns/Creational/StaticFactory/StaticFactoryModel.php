<?php


namespace App\DesignPatterns\Creational\StaticFactory;


use App\DesignPatterns\Fundamental\Delegation\AppMessenger;

class StaticFactoryModel
{

    public static function build(string $type = 'email')
    {
        $messenger = new AppMessenger();
        $sender = '';
        switch ($type) {
            case 'email':
                $sender = 'emailSender';
                $messenger->toEmail();
                break;
            case 'sms':
                $sender = 'smsSender';
                $messenger->toSms();
                break;
            default:
                logger()->error("Неизвестный тип фабрики [{$type}]");
        }

        $messenger
            ->setSender($sender)
            ->setMessage('Message from static fabric using ' . $sender);
        return $messenger;
    }

        public static function getName()
        {
            return 'Статическая фабрика';
        }

        public static function getDescription()
        {
            return '
            То же самое, что и абстрактная фабрика, только не создается экземпляр фабрики, а вызывается статический метод build.<br />
            Также в отличии от Абстрактной фабрики, статическая не требует привязки к интерфейсу. То есть фабрика не обязательно вернет объект одного типа, можно разные.<br />
            StaticFactoryModel::build(сюда идет название класса), создать класс отправки сообщений на почту или по смс.
            ';
        }
}
