<?php


namespace App\DesignPatterns\Creational\Multiton\Traits;


trait MultitonTrait
{

    /**
     * @var self
     */
    private static $_instance = [];


    /**
     * @var string
     */
    public $key;


    /**
     * forbid create
     * SingletonTrait constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return static
     */
    public static function getInstance(string $key)
    {
        if (!isset(static::$_instance[$key])) {
            static::$_instance[$key] = new static();
            static::$_instance[$key]->setKey($key);
        }
        return static::$_instance[$key];
    }

    /**
     * forbid clone
     */
    public function __clone()
    {

    }

    /**
     * forbid deserialize
     */
    public function __wakeup()
    {

    }

    public function setKey(&$key)
    {
        $this->key = $key;
    }

}
