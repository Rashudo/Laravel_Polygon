<?php


namespace App\DesignPatterns\Creational\Singleton;


use App\DesignPatterns\Creational\Singleton\Traits\SingletonTrait;

class SingletonClass
{

    use SingletonTrait;

    public function getTest(): array
    {
        return ['instance' => json_encode(self::class)];
    }


    public static function getName()
    {
        return 'Одиночка (синглтон)';
    }

    public static function getDescription()
    {
        return '<b>Синглтон</b> -
            порождающий шаблон проектирования, гарантирующий, что в однопоточном приложении будет единственный экземпляр некоторого класса, и предоставляющий глобальную точку доступа к этому экземпляру.<br /><br />
            Проще всего реализовывать этот шаблон с помощью Типажа (Trait), которого можно будет назначить в любой класс и сделать его таким образом одиночкой.<br /><br />
            Laravel way - в AppServiceProvider создать свойство singleton = [] - где указать, какой метод будет всегда синглтоном.

            ';
    }
}
