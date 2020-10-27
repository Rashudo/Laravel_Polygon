<?php


namespace App\DesignPatterns\Structural\Adapter\Interfaces;


interface SelfWrittenInterface
{

    /**
     * @return string
     */
    public function method_one() : string;

    /**
     * @return string
     */
    public function method_two() : string;
}
