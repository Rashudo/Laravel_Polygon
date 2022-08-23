<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Facade\Subsystem;

use App\Models\Order;

/**
 * Class AbstractOrderSave
 * @package App\DesignPatterns\Structural\Facade\Subsystem
 */
abstract class AbstractOrderSave
{
    /**
     * @param Order $order
     * @param array $data
     */
    public function __construct(
        public Order $order,
        public array $data
    ) {
    }

    /**
     * @return string
     */
    public function run(): string
    {
        return static::class;
    }
}
