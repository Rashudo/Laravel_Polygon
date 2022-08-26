<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command\Interfaces;

/**
 * Interface iCommand
 * @package App\DesignPatterns\Behavioral\Command\Interfaces
 */
interface iCommand
{
    /**
     * @return void
     */
    public function execute(): void;

    /**
     * @return void
     */
    public function cancel(): void;

    /**
     * @return string
     */
    public function returnAccountName(): string;

    /**
     * @return int
     */
    public function returnAmount(): int;

    /**
     * @return bool
     */
    public function returnStatus(): bool;
}
