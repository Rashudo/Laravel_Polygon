<?php


namespace App\DesignPatterns\Creational\AbstractFactory;


use App\DesignPatterns\Creational\AbstractFactory\Factories\IronDoorFactory;
use App\DesignPatterns\Creational\AbstractFactory\Factories\WoodenDoorFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\iFactory;

class AbstractFactoryModel
{

    /**
     * @param $type
     * @return iFactory
     */
    public function createFactory($type): iFactory
    {
        switch ($type) {
            case 'woodenDoor':
                $fabric = new WoodenDoorFactory();
                break;
            case 'ironDoor':
                $fabric = new IronDoorFactory();
                break;
            default:
                logger()->error("Неизвестный тип фабрики [{$type}]");
        }
        return $fabric;
    }

    public function getName()
    {
        return 'Абстрактная фабрика (иначе Инструментарий)';
    }

    public function getDescription()
    {
        return '
        - Есть переключатель, которому мы скармливаем название <b>группы</b> классов, например, есть фабрика, которая производит элементы интерфейса. Ей можно скормить <i>bootstrap</i>, а можно скормить <i>handmade</i>, в зависимости от этого будет рисоваться в разном стиле.<br />
        - Всё завязано на интерфейсах, фабрики должны реализовывать одинаковые интерфейсы. Например, makeBtn, makeInput и тд<br />
        <i>$model = new AbstractFactoryModel();<br />
        $elem = $model->createFactory(сюда передаем название фабрики);<br /></i>
        В зависимости от этого создается класс, который умеет одно и то же. Делать кнопку, делать стул, делать шаблон страницы и тд.
        ';
    }

}
