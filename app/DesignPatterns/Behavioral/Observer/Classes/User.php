<?php


namespace App\DesignPatterns\Behavioral\Observer\Classes;

/**
 * Класс Пользователя тривиальный, так как он не является
 * главной темой нашего примера.
 */
class User
{

    public $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }
}
