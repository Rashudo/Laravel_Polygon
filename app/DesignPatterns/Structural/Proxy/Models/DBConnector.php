<?php


namespace App\DesignPatterns\Structural\Proxy\Models;


use App\DesignPatterns\Structural\Proxy\Interfaces\iDb;

class DBConnector implements iDb
{

    public $connection;

    public function __construct()
    {
        //connect to db
        $this->connection = new \DB();
    }

    /**
     *
     */
    public function save()
    {
        //$this->connection->query();
        return true;
    }

    /**
     * @return array
     */
    public function get(): string
    {
        //$this->connection->select('');
        return 'BaseClass data';
    }
}
