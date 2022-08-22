<?php

declare(strict_types=1);

namespace App\SolidPrinciples\D\Example;


use App\SolidPrinciples\D\Example\Interfaces\ConnectionInterface;

/**
 * Class MongoConnection
 * @package App\SolidPrinciples\D\Example
 */
class MongoConnection implements ConnectionInterface
{
    /**
     * mongo connection
     */
    public function connect(): void
    {
        //connect to mongo
    }
}
