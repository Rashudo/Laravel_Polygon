<?php

declare(strict_types=1);

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;


/**
 * Class EmailMessenger
 * @package App\DesignPatterns\Fundamental\Delegation\Messengers
 */
class EmailMessenger extends AbstractMessenger
{
    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }
}
