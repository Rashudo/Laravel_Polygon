<?php


namespace App\SolidPrinciples\D\Example;


use App\SolidPrinciples\D\Example\Interfaces\ConnectionInterface;

/**
 * Class PasswordReminder
 * @package App\SolidPrinciples\D\Example
 */
class PasswordReminder
{

    /**
     * @param MySQLConnection $connection
     */
    public function wrongRun(MySQLConnection $connection)
    {
        //
    }

    /**
     * @param ConnectionInterface $connection
     */
    public function rightRun(ConnectionInterface $connection)
    {
        //
    }

}
