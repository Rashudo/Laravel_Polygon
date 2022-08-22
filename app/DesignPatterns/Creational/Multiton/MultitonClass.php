<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Multiton;


use App\DesignPatterns\Creational\Multiton\Traits\MultitonTrait;

/**
 * Class MultitonClass
 * @package App\DesignPatterns\Creational\Multiton
 */
class MultitonClass
{

    use MultitonTrait;

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Пул одиночек (мультитон)';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '<b>Пул одиночек (мультитон)</b> -
            то же самое, что синглтон, только позволяет создавать синглтоны по ключу. Например, DB::getInstance("mysql") и DB::getInstance("mongo") вернут синглтоны подключения к БД.<br /><br />
            То есть в типаже свойство private static $_instance является массивом, где элементы - это ключи синглтонов.

            ';
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
}
