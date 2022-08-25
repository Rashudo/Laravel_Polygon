<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Adapter\Classes;


use App\DesignPatterns\Structural\Adapter\Interfaces\ThirdPartyInterface;

/**
 * Class ThirdPartyLib
 * @package App\DesignPatterns\Structural\Adapter\Classes
 */
final class ThirdPartyLib implements ThirdPartyInterface
{

    /**
     * @return string
     */
    public function party_one(): string
    {
        return __METHOD__;
    }

    /**
     * @return string
     */
    public function party_two(): string
    {
        return __METHOD__;
    }
}
