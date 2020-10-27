<?php


namespace App\DesignPatterns\Behavioral\Observer\Observers;


use SplSubject;

class SmsNotifications implements \SplObserver
{
    /**
     * @var array
     */
    public $log = [];

    public function update(\SplSubject $repository, string $event = null, $data = null): void
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data '" . json_encode($data) . "' | ";
        $this->log[] = "SMS: I've written '$event' entry to the log.";
    }
}
