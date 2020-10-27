<?php


namespace App\DesignPatterns\Structural\Composite;


use App\DesignPatterns\Structural\Composite\Classes\Item;
use App\DesignPatterns\Structural\Composite\Classes\Order;
use App\DesignPatterns\Structural\Composite\Classes\Topping;

class CompositeExample
{
    public function run()
    {
        $order = new Order();

        $item_1 = new Item(1);

        $topping_1 = new Topping(1);
        $topping_2 = new Topping(2);
        $item_1->addTopping($topping_1);
        $item_1->addTopping($topping_2);

        $item_2 = new Item(2);
        $item_2->addTopping($topping_1);

        $item_3 = new Item(3);

        $order->addItem($item_1);
        $order->addItem($item_2);
        $order->addItem($item_3);
        return [
            'item_1_price = ' . $item_1->getPrice(),
            'item_2_price = ' . $item_2->getPrice(),
            'item_3_price = ' . $item_3->getPrice(),
            'total_price = ' . $order->getPrice(),
        ];
    }

    public static function getName()
    {
        return 'Компоновщик';
    }

    public static function getDescription()
    {
        return '
        <b>Компоновщик</b> — это структурный паттерн проектирования, который позволяет сгруппировать множество объектов в древовидную структуру, а затем работать с ней так, как будто это единичный объект.<br />
        <i>refactoring.guru</i><br /><br />
        Хорошо подходит, когда нужно реализовать дерево объектов. Все операции компоновщика основаны на рекурсии и «суммировании» результатов на ветвях дерева.<br />
        Есть какой-то базовый объект (по аналогии с деревом, лист), у которого есть метод, который возвращает, скажем цену. Есть сложный объект (ветка), который сожержит внутри себя другие простые объекты (листы), у него есть своя цена + цена доп. ингредиентов; есть скажем объект (набор), в котором есть группа товаров, у которых есть группа доп. ингредиентов, сам набор своей цены не имеет, он суммирует составные части.<br />
        Получается дерево, у каждого элемента которого есть метод <i>->getPrice</i><br />
        У каждого такого элемента дерева есть одинаковый интерфейс или абстрактный класс-родитель.
        ';
    }
}
