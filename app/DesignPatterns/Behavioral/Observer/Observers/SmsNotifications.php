<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\Observers;


use SplObserver;
use SplSubject;

/**
 * Class Logger
 * @package App\DesignPatterns\Behavioral\Observer\Observers
 */
final class SmsNotifications implements SplObserver
{
    /**
     * @var array
     */
    public array $log = [];

    /**
     * @param SplSubject $repository
     * @param string|null $event
     * @param $data
     * @return void
     */
    public function update(
        SplSubject $repository,
        string $event = null,
        $data = null): void
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data '" . json_encode($data) . "' | ";
        $this->log[] = "SMS: I've written '$event' entry to the log.";
    }
}
