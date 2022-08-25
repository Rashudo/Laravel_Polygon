<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Proxy\Models;


use App\DesignPatterns\Structural\Proxy\Interfaces\iDb;
use DB;

/**
 * Class DBConnector
 * @package App\DesignPatterns\Structural\Proxy\Models
 */
final class DBConnector implements iDb
{

    /**
     * @var DB
     */
    public DB $connection;

    public function __construct()
    {
        //connect to db
        $this->connection = new DB();
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        //$this->connection->query();
        return true;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        //$this->connection->select('');
        return ['BaseClass data'];
    }
}
