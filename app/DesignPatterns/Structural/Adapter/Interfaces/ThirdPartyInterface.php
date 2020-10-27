<?php


namespace App\DesignPatterns\Structural\Adapter\Interfaces;


interface ThirdPartyInterface
{

    /**
     * @return string
     */
    public function party_one(): string;

    /**
     * @return string
     */
    public function party_two(): string;
}
