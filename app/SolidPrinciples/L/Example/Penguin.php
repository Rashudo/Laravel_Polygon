<?php

declare(strict_types=1);

namespace App\SolidPrinciples\L\Example;

/**
 * Class Penguin
 * @package App\SolidPrinciples\L\Example
 */
final class Penguin extends Bird
{

    public function fly(): string
    {
        //die('i can`t fly (((');  // нетипичное поведение - die или exception
        return 'i can`t fly ((('; // нетипичное поведение - возвращаем string, а не integer
    }

    /**
     * @return int
     */
    public function swim(): int
    {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}
