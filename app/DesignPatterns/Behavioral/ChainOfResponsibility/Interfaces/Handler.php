<?php


namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Interfaces;


interface Handler
{
    public function middleware(string $middleware): Handler;

    public function handle(string $request): bool;
}
