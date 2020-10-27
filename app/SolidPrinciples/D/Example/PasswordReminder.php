<?php


namespace App\SolidPrinciples\D\Example;


use App\SolidPrinciples\D\Example\Interfaces\ConnectionInterface;

class PasswordReminder
{

    public function wrongRun(MySQLConnection $connection)
    {
        //
    }

    public function rightRun(ConnectionInterface $connection)
    {
        //
    }

}
