<?php


namespace App\SolidPrinciples\L;


use App\SolidPrinciples\L\Example\Bird;
use App\SolidPrinciples\L\Example\BirdMove;
use App\SolidPrinciples\L\Example\Duck;
use App\SolidPrinciples\L\Example\Penguin;

class LModel
{

    public function run()
    {

        $bird = new Bird();
        //$bird = new Penguin(); //наследуется от Bird и ломает метод fly, возвращает строку, вместо int
        $bird = new Duck(); //наследуется от Bird и не нарушает третий принцип soLid

        $birdRun = new BirdMove($bird);
        $birdRun->run();
        return ['Смотри ' . __NAMESPACE__];
    }

    public static function getName()
    {
        return 'Принцип подстановки Барбары Лисков (Liskov Substitution Principle)';
    }

    public static function getDescription()
    {

        return '
        <b>Функции, использующие указатели ссылок на базовые классы, должны уметь использовать объекты производных классов, даже не зная об этом.</b><br />

        Попросту говоря: подкласс/производный класс должен быть взаимозаменяем с базовым/родительским классом.';
    }
}
