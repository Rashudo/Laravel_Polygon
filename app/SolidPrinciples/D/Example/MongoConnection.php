<?php


namespace App\SolidPrinciples\D\Example;


use App\SolidPrinciples\D\Example\Interfaces\ConnectionInterface;

class MongoConnection implements ConnectionInterface
{
    /**
     * mongo connection
     */
    public function connect()
    {
        //coneect to mongo
    }
}
