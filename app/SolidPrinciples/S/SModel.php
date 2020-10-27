<?php


namespace App\SolidPrinciples\S;


use App\SolidPrinciples\S\Example\ClassLogger;
use App\SolidPrinciples\S\Example\Product;

class SModel
{
    public function run()
    {
        $logger = new ClassLogger();
        $product = new Product($logger);
        $product->setPrice();
        return ['Смотри ' . __NAMESPACE__];
    }

    public static function getName()
    {
        return 'Single Responsibility Principle (Принцип единственной ответственности).';
    }

    public static function getDescription()
    {

        return '
        <b>Существует лишь одна причина, приводящая к изменению класса.</b><br />
        Один класс должен решать только какую-то одну задачу. Он может иметь несколько методов, но они должны использоваться лишь для решения общей задачи. Все методы и свойства должны служить одной цели. Если класс имеет несколько назначений, его нужно разделить на отдельные классы.';
    }
}
