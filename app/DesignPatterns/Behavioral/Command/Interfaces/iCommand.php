<?php


namespace App\DesignPatterns\Behavioral\Command\Interfaces;


interface iCommand
{
    public function execute(): void;

    public function cancel(): void;

    public function returnAccountName(): string;

    public function returnAmount(): int;

    public function returnStatus(): bool;
}
