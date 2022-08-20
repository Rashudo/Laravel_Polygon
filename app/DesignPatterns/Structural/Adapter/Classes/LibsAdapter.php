<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Adapter\Classes;


use App\DesignPatterns\Structural\Adapter\Interfaces\SelfWrittenInterface;
use Exception;

/**
 * Class LibsAdapter
 * @package App\DesignPatterns\Structural\Adapter\Classes
 */
final class LibsAdapter implements SelfWrittenInterface
{
    /**
     * @var ThirdPartyLib
     */
    private $libObject;

    public function __construct()
    {
        $this->libObject = new ThirdPartyLib();
    }

    public static function getName()
    {
        return 'Адаптер';
    }

    public static function getDescription()
    {
        return '
        <b>Адаптер</b> —  это структурный паттерн проектирования, который позволяет объектам с несовместимыми интерфейсами работать вместе.<br />
        ---------------------<br />
        Есть старая библиотека, которая реализует старый интерфейс. Есть новая библиотека, которая реализует новый интерфейс. Надо проект перевести на новую либу, но чтобы не ходит по всему проекту и не менять методы, делается новый класс <b>Адаптер</b>, он реализует старый интерфейс, но внутри старых методов уже обращается к методам новой либы, поэтому кажется, что проект работает по старым методам, но из-за адаптера на самом деле работа ведется уже с новой библиотекой.<br />
        ---------------------<br />
        Также внутри класса адаптера можно сделать метод __call, который перехватит работу тех методов, которых не было в старой библиотеке.<br />
        ---------------------<br />
        Также в ларавель можно не просто заменить создание старого класса на адаптер<br />
        <i>$oldLib = app(SelfWrittenLib::class);</i> на <i>$adapter = app(LibsAdapter::class);</i><br />,
        а проинициализировать класс через интерфейс<br />
        <i>app(SelfWrittenInterface::class);</i><br />
        Только после этого надо указать в AppServiceProvider, что если пытаемся создать такой интерфейс, то подставлять некий класс, в нашем случае - это класс адаптера.<br />
        <i>public $bindings = [<br />
        SelfWrittenInterface::class => LibsAdapter::class<br />
        ];</i>

        ';
    }

    public function method_one(): string
    {
        return $this->libObject->party_one();
    }

    public function method_two(): string
    {
        return $this->libObject->party_two();
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->libObject, $name)) {
            //return $this->libObject->{$name}();
            return call_user_func_array([$this->libObject, $name], $arguments);
        } else {
            throw new Exception("Метод $name не найден");
        }
    }
}
