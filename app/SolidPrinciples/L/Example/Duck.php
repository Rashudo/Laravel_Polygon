<?php


namespace App\SolidPrinciples\L\Example;


class Duck extends Bird
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
