<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\Classes;

/**
 * Класс Пользователя тривиальный, так как он не является
 * главной темой нашего примера.
 */
final class User
{

    public array $attributes = [];

    /**
     * @param array $data
     * @return void
     */
    public function update(array $data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }
}
