<?php

declare(strict_types=1);

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;


use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;

/**
 * Class AbstractMessenger
 * @package App\DesignPatterns\Fundamental\Delegation\Messengers
 */
abstract class AbstractMessenger implements MessengerInterface
{

    /**
     * @var string
     */
    protected string $sender;

    /**
     * @var string
     */
    protected string $recipient;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setSender($value): MessengerInterface
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setRecipient($value): MessengerInterface
    {
        $this->recipient = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message ?? '1';
    }

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setMessage($value): MessengerInterface
    {
        $this->message = $value;

        return $this;
    }

}
