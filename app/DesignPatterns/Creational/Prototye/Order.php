<?php


namespace App\DesignPatterns\Creational\Prototye;


use Carbon\Carbon;

class Order
{

    public $id;

    /**
     * @var Carbon
     */
    public $deliveryDt;

    public $client;

    public function __construct($id, Carbon $deliveryDt, Client $client)
    {
        $this->id = $id;
        $this->deliveryDt = $deliveryDt;
        $this->client = $client;
    }

    public function __clone()
    {
        $this->id = $this->id + 1;
        $this->deliveryDt = $this->deliveryDt->clone();

        $this->client->addOrder($this);
    }


    public function __toString()
    {
        return $this->deliveryDt->toDateString();
    }
}
