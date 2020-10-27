<?php


namespace App\DesignPatterns\Fundamental\Delegation\Interfaces;


interface MessengerInterface
{

    public function setSender($value): MessengerInterface;

    public function setRecipient($value): MessengerInterface;

    public function setMessage($message): MessengerInterface;

    /**
     * @return bool
     */
    public function send(): bool;
}
