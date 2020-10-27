<?php


namespace App\DesignPatterns\Behavioral\State;


use App\DesignPatterns\Behavioral\State\Classes\Objects\Order;
use App\DesignPatterns\Behavioral\State\Classes\States\PrepareState;

class StateModel
{

    public function run()
    {
        $order = new Order();
        $order->setState(new PrepareState());
        $result = [];
        $result[] = $order->handle1();
        $result[] = $order->handle2();
        $result[] = $order->handle1();
        $result[] = $order->handle2();
        return $result;
    }


    public static function getName()
    {
        return 'Состояние';
    }

    public static function getDescription()
    {
        return '
        <b>Состояние</b> - это поведенческий паттерн проектирования, который позволяет объектам менять поведение в зависимости от своего состояния. Извне создаётся впечатление, что изменился класс объекта.<br />
        <i>refactoring.guru</i><br /><br />

        Есть класс какого-то объекта и есть классы состояния. Классы состояни имеют общий интерфейс, либо наследуются от абстрактного класса, который форсирует порождение методов.<br />
        Создается класс объекта и туда подсовываются классы состояний. Когда дергается метод класса-объекта, он внутри этого метода дергает метод состояния. <br />

        Можно привести пример с заказом. Есть класс Заказ. Туда передается класс-состояние, например, Формируется. Теперь, когда заказ сохраняется, функционал делегируется классу Фомрируется. Потом Заказу передается состояние Оформлен, соответсвенно, реакции на на какие-то действия передаются в класс Оформлен. И т.д.
        ';
    }
}
