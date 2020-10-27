<?php


namespace App\SolidPrinciples\L\Example;


class Bird
{
    /**
     * @return int
     */
    public function fly(): int
    {
        $flySpeed = 10;
        return $flySpeed;
    }
}
