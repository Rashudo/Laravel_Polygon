<?php


namespace App\DesignPatterns\Structural\Proxy\Models;


use App\DesignPatterns\Structural\Proxy\Interfaces\iDb;

class DbProxy implements iDb
{
    /**
     * @var float
     */
    public $time = 0;
    /**
     * @var iDb
     */
    private $object;
    /**
     * @var array
     */
    private $cached = [];


    public function __construct(iDb $object)
    {
        $this->object = $object;
    }

    public function save()
    {
        //Do smth before
        $start = microtime(true);
        $this->object->save();
        //Do smth after
        $this->time = microtime(true) - $start;
    }

    public function get(): string
    {
        if (empty($this->cached)) {
            $this->cached = $this->object->get();
        } else {
            $this->cached = $this->cached . ' | asked from cache';
        }
        return $this->cached;
    }
}
