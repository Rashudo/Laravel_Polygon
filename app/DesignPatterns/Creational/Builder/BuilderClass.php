<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Builder;


use App\DesignPatterns\Creational\Builder\Builders\OrderBuilder;
use App\DesignPatterns\Creational\Builder\Builders\OrderManager;

/**
 * Class BuilderClass
 * @package App\DesignPatterns\Creational\Builder
 */
class BuilderClass
{

    /**
     * @return string
     */
    public static function builderHandler(): string
    {
        $result = (new OrderBuilder())
            ->setSource('site')
            ->setSum(450)
            ->getOrder();
        return 'Создано через билдер, объект Order, с source = ' . $result->source . ' и суммой = ' . $result->sum;
    }

    /**
     * @return string
     */
    public static function builderManager(): string
    {
        $result = (new OrderManager(new OrderBuilder()))
            ->createOrderFromApi();
        return 'Создано через OrderManager, объект Order, с source = ' . $result->source . ' и суммой = ' . $result->sum;
    }


    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Строитель';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '<b>Строитель</b> -
            класс которому доверили создавать экземпляр другого класса. Это может быть связано с тем, что класс создается как-то сложно, инициируется ряд свойств; в одном месте этот класс создается с одним набром логики, в другом - с другим.<br />
            Поэтому удобнее завести строителя, который будет хранить у себя сеттеры, для заведения свойст, будет иметь понятный легкий интерфейс.<br /><br />
            В ларавель строитель встречается, когда создаешь запрос к какой-то таблице, например: <br />
            <i>User::select(["id", "name", "age"])->whereIn("id", [1,2])->orderBy("id", "desc")</i> - вот это строитель.<br /><br />
            Сам по себе билдер может быть полезен в связке с менеджером(директором) - это еще один класс, которому передаем билдера, а там уже есть методы, которые внутри хранят логику создания этого нужного класса с ипользованием билдера и его сеттеров.


            ';
    }
}
