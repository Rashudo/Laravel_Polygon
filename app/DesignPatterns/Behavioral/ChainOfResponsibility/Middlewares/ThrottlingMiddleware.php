<?php


namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;


class ThrottlingMiddleware extends AbstractMiddleware
{

    public function handle(string $request): bool
    {
        if (!strstr($request, '1')) {
            return false;
        }
        return parent::handle($request);
    }
}
