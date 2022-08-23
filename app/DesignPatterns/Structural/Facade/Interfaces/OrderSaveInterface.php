<?php


namespace App\DesignPatterns\Structural\Facade\Interfaces;

use App\Models\Order;

/**
 * Interface OrderSaveInterface
 * @package App\DesignPatterns\Structural\Facade\Interfaces
 */
interface OrderSaveInterface
{
    /**
     * Save order to DB
     *
     * @param Order $order
     * @param array $data
     * @return array
     */
    public function save(Order $order, array $data): array;
}
