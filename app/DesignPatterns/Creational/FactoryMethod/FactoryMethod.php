<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\FactoryMethod;


use App\DesignPatterns\Creational\FactoryMethod\Classes\IronDoor;
use App\DesignPatterns\Creational\FactoryMethod\Classes\WoodenDoor;

/**
 * Class FactoryMethod
 * @package App\DesignPatterns\Creational\FactoryMethod
 */
class FactoryMethod
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Фабричный метож';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
        <b>Фабричный метод</b> - это способ делегирования логики создания объектов дочерним классам. <br /><br />
         Порождающий шаблон проектирования, предоставляющий подклассам (дочерним классам) интерфейс для создания экземпляров некоторого класса. В момент создания наследники могут определить, какой класс создавать. Иными словами, данный шаблон делегирует создание объектов наследникам родительского класса. Это позволяет использовать в коде программы не специфические классы, а манипулировать абстрактными объектами на более высоком уровне.<br /><br />

         В ларавель я использую этот шаблон в репозиториях.<br />
         То есть есть репозитории, которые работают с товарами, каталогами, пользователями и т.д.<br />
         Они наследуют абстрактный класс репозитория. Который создание экземляра модели делегирует потомку, сам же хранит некую логику.<br />
         То есть в абстрактном классе есть фабричный метод, который создает объект, но какой объект создасться - дело потомка.
        ';
    }

    public function useFactoryMethod(): array
    {
        $build = [];
        $build[] = (new IronDoor())->buildDoor();
        $build[] = (new WoodenDoor())->buildDoor();
        return $build;
    }
}
