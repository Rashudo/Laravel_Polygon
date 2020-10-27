<?php


namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;


class InitMiddleware extends AbstractMiddleware
{

    public function handle(string $request): bool
    {
        //Тут можно всякие сессии установить
        return parent::handle($request);
    }
}
