<?php

declare(strict_types=1);

namespace App\SolidPrinciples\L\Example;

/**
 * Class Duck
 * @package App\SolidPrinciples\L\Example
 */
final class Duck extends Bird
{
    /**
     * @return int
     */
    public function fly(): int
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    /**
     * @return int
     */
    public function swim(): int
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}
