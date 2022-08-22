<?php

declare(strict_types=1);

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;

/**
 * Class AbstractMessenger
 * @package App\DesignPatterns\Fundamental\Delegation\Messengers
 */
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
