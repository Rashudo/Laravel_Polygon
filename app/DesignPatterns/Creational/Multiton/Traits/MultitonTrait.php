<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Multiton\Traits;

/**
 * Trait MultitonTrait
 * @package App\DesignPatterns\Creational\Multiton\Traits
 */
trait MultitonTrait
{

    /**
     * @var self
     */
    private static $_instance = [];


    /**
     * @var string
     */
    public string $key;


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
    public static function getInstance(string $key): static
    {
        if (!isset(static::$_instance[$key])) {
            static::$_instance[$key] = new static();
            static::$_instance[$key]->setKey($key);
        }
        return static::$_instance[$key];
    }

    public function setKey(&$key): void
    {
        $this->key = $key;
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
