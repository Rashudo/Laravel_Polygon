<?php


namespace App\Models;


class Workers
{

    public $id = 0;

    public function __construct()
    {
        $this->id = rand(1, 100);
    }

    public function departmentName()
    {
        $departments = [
            'CourierAuto',
            'CourierHiking',
            'Florist',
            'Logist'
        ];


        $key = array_rand($departments);

        return $departments[$key];

    }
}
