<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Adapter\Classes;

use App\DesignPatterns\Structural\Adapter\Interfaces\SelfWrittenInterface;

/**
 * Class SelfWrittenLib
 * @package App\DesignPatterns\Structural\Adapter\Classes
 */
final class SelfWrittenLib implements SelfWrittenInterface
{

    /**
     * @return string
     */
    public function method_one(): string
    {
        return __METHOD__;
    }

    /**
     * @return string
     */
    public function method_two(): string
    {
        return __METHOD__;
    }

}
