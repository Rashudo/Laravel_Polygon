<?php


namespace App\DesignPatterns\Fundamental\Delegation\Messengers;


class SmsMessenger extends AbstractMessenger
{

    /**
     * @return bool
     */
    public function send(): bool
    {
        return false;
    }
}
