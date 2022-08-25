<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Proxy\Models;


use App\DesignPatterns\Structural\Proxy\Interfaces\iDb;

/**
 * Class DBConnector
 * @package App\DesignPatterns\Structural\Proxy\Models
 */
final class DbProxy implements iDb
{
    /**
     * @var float
     */
    public float $time = 0;

    /**
     * @var array
     */
    private array $cached = [];


    /**
     * @param iDb $object
     */
    public function __construct(private iDb $object)
    {
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        //Do smth before
        $start = microtime(true);
        $result = $this->object->save();
        //Do smth after
        $this->time = microtime(true) - $start;
        return $result;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        if (empty($this->cached)) {
            $this->cached = $this->object->get();
        } else {
            $this->cached[] = ' | asked from cache';
        }
        return $this->cached;
    }
}
