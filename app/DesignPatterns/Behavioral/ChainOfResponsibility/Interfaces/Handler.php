<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Interfaces;

/**
 * Interface Handler
 * @package App\DesignPatterns\Behavioral\ChainOfResponsibility\Interfaces
 */
interface Handler
{
    /**
     * @param string $middleware
     * @return Handler
     */
    public function middleware(string $middleware): Handler;

    /**
     * @param string $request
     * @return bool
     */
    public function handle(string $request): bool;
}
