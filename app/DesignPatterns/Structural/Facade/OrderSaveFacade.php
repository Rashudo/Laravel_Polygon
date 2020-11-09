<?php


namespace App\DesignPatterns\Structural\Facade;


use App\DesignPatterns\Structural\Facade\Interfaces\OrderSaveInterface;
use App\DesignPatterns\Structural\Facade\Subsystem\OrderSave;
use App\DesignPatterns\Structural\Facade\Subsystem\OrderSaveProducts;
use App\DesignPatterns\Structural\Facade\Subsystem\OrderSaveUser;
use App\Models\Order;

class OrderSaveFacade implements OrderSaveInterface
{
    public static function getName()
    {
        return 'Фасад';
    }

    public static function getDescription()
    {
        return '
        <b>Фасад</b> — это структурный паттерн проектирования, который предоставляет простой интерфейс к сложной системе классов, библиотеке или фреймворку.<br />
        <i>refactoring.guru</i><br /><br />
        Есть сервис, папка с кучей классов, библиотека или типа того, чтобы не помнить какие методы в дергать в этих классах, создается один класс, который в себе хранит понятные короткие методы, есть интерфейс к фасаду с описанием, что методы делают, а сам фасад уже делегирует задачи кому надо.<br />
        То есть, это как руль, селектор и педали в машине, они выведены наружу, они понятны. А каждое взаимодействие с этими элементами вызывает обращение к двигателю, колесам, коробке и т.д.<br /><br />
        <b>Да, методы фасада лучше бы делать статическими!</b>
        ';
    }

    public function save(Order &$order, array &$data): array
    {
        $return = [];

        $return[] = (new OrderSaveProducts($order, $data))->run();
        $return[] = (new OrderSaveUser($order, $data))->run();
        $return[] = (new OrderSave($order, $data))->run();


        return $return;
    }
}
