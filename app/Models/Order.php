<?php


namespace App\Models;


use App\DesignPatterns\Structural\Decorator\Interfaces\iOrder;

class Order
{

    /**
     * @var int
     */
    public $id = 0;

    /**
     * @var int
     */
    public $sum = 0;


    /**
     * @var array
     */
    public $items = [];

    /**
     * @var string
     */
    public $recipients = [];
}
