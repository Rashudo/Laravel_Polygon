<?php


namespace App\SolidPrinciples\O;


use App\SolidPrinciples\O\Example\{ClassLogger, FileLogger, Product};

class OModel
{

    /**
     * @return string
     */
    public static function getName()
    {
        return 'Принцип открытости/закрытости (Open-closed Principle)';
    }

    /**
     * @return string
     */
    public static function getDescription()
    {

        return '
        <b>Программные сущности должны быть открыты для расширения, но закрыты для модификации.</b><br />

        Программные сущности (классы, модули, функции и прочее) должны быть расширяемыми без изменения своего содержимого. Если строго соблюдать этот принцип, то можно регулировать поведение кода без изменения самого исходника.';
    }

    /**
     * @return array
     */
    public function run()
    {
        $logger = new ClassLogger();
        //ClassLogger реализует какую-то логику записи, скажем в БД, а мы хотим для Продукта писать логи в файл.
        //Для этого придется поменять ClassLogger, но тогда все, кто использует этот класс начнут писать логи в файл.
        //Изначально нужно было сделать специфические классы FileLogger, DbLogger, которые бы реализовывали определенный интерфейс.
        //Либо использовать полиморфизм и делать наследника класса ClassLogger, где переопределять метод log

        $logger = new FileLogger();
        $product = new Product($logger);
        $product->setPrice();
        return ['Смотри ' . __NAMESPACE__];
    }
}
