<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;

/**
 * Class InitMiddleware
 * @package App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares
 */
final class InitMiddleware extends AbstractMiddleware
{

    /**
     * @param string $request
     * @return bool
     */
    public function handle(string $request): bool
    {
        //Тут можно всякие сессии установить
        return parent::handle($request);
    }
}
