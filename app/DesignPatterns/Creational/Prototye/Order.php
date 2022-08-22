<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Prototye;


use Carbon\Carbon;

/**
 * Class Order
 * @package App\DesignPatterns\Creational\Prototye
 */
class Order
{
    /**
     * @param int $id
     * @param Carbon $deliveryDt
     * @param Client $client
     */
    public function __construct(
        public int $id,
        public Carbon $deliveryDt,
        public Client $client
    ) {
    }

    /**
     * @return void
     */
    public function __clone()
    {
        $this->id = $this->id + 1;
        $this->deliveryDt = $this->deliveryDt->clone();

        $this->client->addOrder($this);
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->deliveryDt->toDateString();
    }
}
