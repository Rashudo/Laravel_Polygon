<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\LazyInitialization;


use App\Models\Order;

/**
 * Class LazyInitialization
 * @package App\DesignPatterns\Creational\LazyInitialization
 */
class LazyInitialization
{

    public Order $order;

    public function __construct()
    {
        //$this->order = new Order(); <- так лучше не делать, если не во всех методах нужен order
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Ленивая инициализация';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '<b>Отложенная (ленивая) инициализация</b> -
             приём в программировании, когда некоторая ресурсоёмкая операция (создание объекта, вычисление значения) выполняется непосредственно перед тем, как будет использован её результат. Таким образом, инициализация выполняется «по требованию», а не заблаговременно.<br />
             ------------------------------<br />
             Можно инициализировать вспомогательные объекты или делать вычисления в конструкторе класса, но это может быть накладно по ресурсам, плюс не во всех методах класса это нужно, либо не при каждом создании этого объекта нужно всё это проделывать.<br />
             Тогда лучше в классе сделать вспомогательный метод, который проверит есть ли уже такое свойство и если нет, только тогда его заполнит (создаст экземпляр другого класса или произведет вычисление).<br />
             И тогда получать это свойство нужно через этот вспомогательный метод, например так: <br />
             <i>$lazyExample->getOrder()->id;</i><br /><br />
             ------------------------------<br />
             В ларавель ленивая инициализация используется когда в модели Items, например, есть метод catalogs() или offices(). Выборка происходит только, когда где-то в другом месте обратятся к свойству $items->catalogs или $items->offices
             <br /><br />
             ------------------------------<br />
             Обойти ленивую зугрузку можно выполнив жадный вариант:<br />
             ->select()<br />
             ->orderBy("sorting", "DESC")<br />
             ->with(["catalogs", "offices"])<br />
             ->paginate(10);<br />
             А можно так: <br />
             ->with(["catalogs" => function($query) { <br />
             $query<br />
             ->select("id","name")<br />
             ->orderBy("sorting", "DESC")<br />
             }])<br />
             Или так: <br />
             ->with(["catalogs:id, name")
            ';
    }

    /**
     * Метод проверяет, есть ли Order, если нет - создает.
     *
     * @return Order
     */
    public function getOrder(): Order
    {
        if (!isset($this->order)) {
            $this->order = new Order();
        }
        return $this->order;
    }

}
