<?php


namespace App\DesignPatterns\Structural\Proxy\Interfaces;


interface iDb
{

    /**
     * @return mixed
     */
    public function save();

    /**
     * @return array
     */
    public function get(): string;
}
