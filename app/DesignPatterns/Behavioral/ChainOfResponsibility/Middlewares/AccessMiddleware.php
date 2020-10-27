<?php


namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;


class AccessMiddleware extends AbstractMiddleware
{
    public function handle(string $request): bool
    {
        if (!strstr($request, 'Access')) {
            return false;
        }
        return parent::handle($request);
    }
}
