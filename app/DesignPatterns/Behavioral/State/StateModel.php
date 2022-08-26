<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State;


use App\DesignPatterns\Behavioral\State\Classes\Objects\Order;
use App\DesignPatterns\Behavioral\State\Classes\States\PrepareState;
use App\DesignPatterns\Behavioral\State\Classes\States\SendState;

/**
 * Class StateModel
 * @package App\DesignPatterns\Behavioral\State
 */
final class StateModel
{

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Состояние';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
        <b>Состояние</b> - это поведенческий паттерн проектирования, который позволяет объектам менять поведение в зависимости от своего состояния. Извне создаётся впечатление, что изменился класс объекта.<br />
        <i>refactoring.guru</i><br /><br />

        Есть класс какого-то объекта и есть классы состояния. Классы состояни имеют общий интерфейс, либо наследуются от абстрактного класса, который форсирует порождение методов.<br />
        Создается класс объекта и туда подсовываются классы состояний. Когда дергается метод класса-объекта, он внутри этого метода дергает метод состояния. <br />

        Можно привести пример с заказом. Есть класс Заказ. Туда передается класс-состояние, например, Формируется. Теперь, когда заказ сохраняется, функционал делегируется классу Фомрируется. Потом Заказу передается состояние Оформлен, соответсвенно, реакции на на какие-то действия передаются в класс Оформлен. И т.д.
        ';
    }

    /**
     * @return array
     */
    public function run(): array
    {
        $order = new Order();
        $order->setState(new PrepareState());
        $result = [];
        $result[] = $order->handle1();
        $result[] = $order->handle2();

        $order->setState(new SendState());
        $result[] = $order->handle1();
        $result[] = $order->handle2();
        return $result;
    }
}
