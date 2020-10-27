<?php


namespace App\DesignPatterns\Creational\Singleton\Traits;


trait SingletonTrait
{

    /**
     * @var
     */
    private static $_instance;

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
    public static function getInstance()
    {
        return static::$_instance ?? (static::$_instance = new static());
//        if (null === self::$_instance) {
//            self::$_instance = new self();
//            self::$_instance->run();
//        }
//        return self::$_instance;
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
}
