<?php


namespace App\DesignPatterns\Structural\Adapter\Classes;


use App\DesignPatterns\Structural\Adapter\Interfaces\ThirdPartyInterface;

class ThirdPartyLib implements ThirdPartyInterface
{

    public function party_one():string
    {
        return __METHOD__;
    }

    public function party_two():string
    {

        return __METHOD__;
    }
}
