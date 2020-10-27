<?php


namespace App\SolidPrinciples\L\Example;


class Penguin extends Bird
{

    public function fly(): string
    {
        //die('i can`t fly (((');  // не типичное поведение - die или exception
        return 'i can`t fly ((('; // не типичное поведение - возвращаем string, а не integer
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
