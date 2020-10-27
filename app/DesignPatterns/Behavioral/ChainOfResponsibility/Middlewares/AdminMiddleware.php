<?php


namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;


class AdminMiddleware extends AbstractMiddleware
{
    public function handle(string $request): bool
    {
        if (!strstr($request, 'Admin')) {
            return false;
        }
        return parent::handle($request);
    }
}
