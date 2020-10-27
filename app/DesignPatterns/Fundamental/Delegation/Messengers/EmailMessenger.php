<?php


namespace App\DesignPatterns\Fundamental\Delegation\Messengers;


class EmailMessenger  extends AbstractMessenger
{

    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }
}
