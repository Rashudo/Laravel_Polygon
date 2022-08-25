<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Decorator;

use App\DesignPatterns\Structural\Decorator\OrderDecorator\MailOrder;
use App\DesignPatterns\Structural\Decorator\OrderDecorator\OMOrder;
use App\DesignPatterns\Structural\Decorator\OrderDecorator\OrderBase;
use App\Models\Order;

/**
 * Class DecoratorExample
 * @package App\DesignPatterns\Structural\Decorator
 */
final class DecoratorExample
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Декоратор';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
        <b>Декоратор</b> — это структурный паттерн, который позволяет добавлять объектам новые поведения на лету, помещая их в объекты-обёртки.<br />
        <i>refactoring.guru</i><br /><br />
        Простыми словами, есть базовый класс декоратора, он может быть даже, например, абстрактным, чтоб нельзя было создать его экземпляр. Есть обязательно интерфейс,
        который реализует какой-то конкретный начальный элемент, а также все специцические декораторы, которые потом наследют базовый абстрактный класс декоратора. <br />
        Создается экземляр начального объекта, потом он передается в первый декоратор, потом во второй и тд. Т.к. все они реализуют один интерфейс, то клиент работает с декорируемыми объектами также, как и с базовым.<br />
        В базовом абстрактном классе декоратора нет никакой логики. Там создается поле для хранения переданного класса, а также есть метод, который делегирует всю логику в базовый класс.<br />
        <i>/**<br />
        * Декоратор делегирует всю работу обёрнутому компоненту.<br />
        */<br />
        public function formatText(string $text): string<br />
        {<br />
            return $this->inputFormat->formatText($text);<br />
        }</i>
        <br /><br />
        Самый, наверное, яркий пример - это если надо форматировать текст, то можно передавать его по цепочке в классы, которые будут сначала вызывать функционал родителей, а потом будут что-то делать сами.<br />
        Еще можно представить, например, класс заказа. Сначала был базовый заказ, потом нужно сделать заказ, который попадет в систему гугл.апи, потом уйдет в апи внутренней системы, потом отправится по почте, потом запишется в БД и тд.<br /><br />
        То есть декораторы - это классы операций над базовым классом, объектом или элементом.
        ';
    }

    /**
     * @return array|string
     */
    public function run(): array|string
    {
        $order = new Order;
        $baseOrder = new OrderBase($order);
        $mailOrder = new MailOrder($baseOrder);
        $omOrder = new OMOrder($mailOrder);
        $omOrder->operate($order);
        return $order->recipients;
    }
}
