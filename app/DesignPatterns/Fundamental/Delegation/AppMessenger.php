<?php

declare(strict_types=1);

namespace App\DesignPatterns\Fundamental\Delegation;


use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;
use App\DesignPatterns\Fundamental\Delegation\Messengers\EmailMessenger;
use App\DesignPatterns\Fundamental\Delegation\Messengers\SmsMessenger;

/**
 * Class AppMessenger
 * @package App\DesignPatterns\Fundamental\Delegation
 */
class AppMessenger implements MessengerInterface
{

    /**
     * @var MessengerInterface
     */
    private MessengerInterface $messenger;

    public function __construct()
    {
        $this->toEmail();
    }


    public function toEmail(): static
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    public static function getName()
    {
        return 'Шаблон делегирования';
    }

    public static function getDescription()
    {
        return '
        <b>Делегирование</b> (англ. Delegation) — основной шаблон проектирования, в котором объект внешне выражает некоторое поведение, но в реальности передаёт ответственность за выполнение этого поведения связанному объекту.<br />
        <i>wiki</i><br />

        Есть класс, который делегирует свои полномочия другим классам, они реализуют тот же интерфейс и кажется, что он всё умеет, но он как начальник передает задачи в соответсвующие классы.<br />
        Например, есть базовый класс <i>AppMessenger</i>, он должен отправлять сообщение. У него есть методы <i>setMessage</i>, <i>setSender</i>, <i>setRecipient</i>, <i>send</i>... Его можно переключить методом <i>toEmail</i> или <i>toSms</i>. Эти переключалки создают посредников, которым главный класс делегирует свои задачи, устанавливается <i>$this->messenger</i><br />
        То есть в <i>AppMessenger->send()</i> вызывается включенный класс и у него дергается метод send (<i>$this->messenger->send()</i>);<br />
        Сам <i>AppMessenger</i> умеет только делегировать. Он может разное делегировать, например, отправлять сообщения делегирует одним классам, запись ответа делегирует другим и тд.
        ';
    }

    public function toSms(): static
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setSender($value): MessengerInterface
    {
        $this->messenger->setSender($value);

        return $this;
    }

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setRecipient($value): MessengerInterface
    {
        $this->messenger->setRecipient($value);

        return $this;
    }

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setMessage($value): MessengerInterface
    {
        $this->messenger->setMessage($value);

        return $this;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return $this->messenger->send();
    }

    public function __toString(): string
    {
        return $this->getMessage();
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->messenger->getMessage();
    }

}
