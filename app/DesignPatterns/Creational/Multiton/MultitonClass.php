<?php


namespace App\DesignPatterns\Creational\Multiton;


use App\DesignPatterns\Creational\Multiton\Traits\MultitonTrait;

class MultitonClass
{

    use MultitonTrait;

    public function getKey()
    {
        return $this->key;
    }


    public static function getName()
    {
        return 'Пул одиночек (мультитон)';
    }

    public static function getDescription()
    {
        return '<b>Пул одиночек (мультитон)</b> -
            то же самое, что синглтон, только позволяет создавать синглтоны по ключу. Например, DB::getInstance("mysql") и DB::getInstance("mongo") вернут синглтоны подключения к БД.<br /><br />
            То есть в типаже свойство private static $_instance является массивом, где элементы - это ключи синглтонов.

            ';
    }
}
