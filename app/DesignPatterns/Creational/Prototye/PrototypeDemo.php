<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Prototye;


use Carbon\Carbon;

/**
 * Class PrototypeDemo
 * @package App\DesignPatterns\Creational\Prototye
 */
class PrototypeDemo
{

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Прототип (клон)';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
        <b>Прототип</b> —  Паттерн создания объекта через клонирование объекта вместо создания через new.<br />
        ---------------------<br />
        Порой надо создать объект, наделить его всякими свойствами, но иметь возможность всегда вызвать начальный объект (прототип). Поэтому создавать такой объект лучше через <i>clone</i><br />
        ---------------------<br />
        В ларавель я использую такое в репозиториях, где CoreRepository получает от потомка название класса и каждый метод потомка обращается к классу Модели через startCondition(), где как раз клонируется изначальная модель.<br />
        ---------------------<br />
        Подводными камнями является то, что при клонировании объекта в нем могло быть что-то, что является ссылкой, например, скажем, Carbon. Или будет одинаковые id. Поэтому в клонируемом классе надо сделать метод __clone. Где описать логику, какие свойства будут клонироваться, какие меняться, может быть еще какая логика, например, добавление заказа в пул к клиенту.

        ';
    }

    /**
     * @return array
     */
    public function run(): array
    {
        $client = new Client(1, 'Test1');

        $deliveryDt = Carbon::parse('31.12.2020 15:00:00');

        $order = new Order(1, $deliveryDt, $client);

        $client->addOrder($order);

        $cloneOrder = clone $order;
        //Внимание!
        //Если не использовать магический метод __clone
        //В классе Order, то следующая строка изменит свойство deliveryDt
        //В обоих экземлпярах
        $cloneOrder->deliveryDt->addDay();

        return compact('client', 'order', 'cloneOrder');
    }
}
