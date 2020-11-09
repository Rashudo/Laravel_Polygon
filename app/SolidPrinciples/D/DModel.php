<?php


namespace App\SolidPrinciples\D;


use App\SolidPrinciples\D\Example\MongoConnection;
use App\SolidPrinciples\D\Example\MySQLConnection;
use App\SolidPrinciples\D\Example\PasswordReminder;

/**
 * Class DModel
 * @package App\SolidPrinciples\D
 */
class DModel
{
    /**
     * @return string
     */
    public static function getName()
    {
        return 'Принцип инверсии зависимостей (Dependency Inversion Principle)';
    }

    /**
     * @return string
     */
    public static function getDescription()
    {

        return '
        <b>Высокоуровневые модули не должны зависеть от низкоуровневых. Оба вида модулей должны зависеть от абстракций.<br />
            Абстракции не должны зависеть от подробностей. Подробности должны зависеть от абстракций.</b><br />

            Проще говоря: зависьте от абстракций, а не от чего-то конкретного.';
    }

    /**
     * @return array
     */
    public function run()
    {
        $dbConnection = new MySQLConnection();
        $mongoConnection = new MongoConnection();
        $passwordReminder = new PasswordReminder();
        $passwordReminder->wrongRun($dbConnection); //нарушается пятый принцип soliD высокоуровневый класс зависит от конкретной реализации.
        //если мы захотим поменять подключение, тут придется всё менять.
        $passwordReminder->rightRun($mongoConnection); // тут не нарушается, rightRun зависит от абстракции (интерфейса), а не от реализации
        return ['Смотри ' . __NAMESPACE__];
    }
}
