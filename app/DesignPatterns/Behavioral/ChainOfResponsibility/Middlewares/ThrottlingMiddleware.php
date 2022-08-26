<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;

/**
 * Class ThrottlingMiddleware
 * @package App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares
 */
final class ThrottlingMiddleware extends AbstractMiddleware
{

    /**
     * @param string $request
     * @return bool
     */
    public function handle(string $request): bool
    {
        if (!str_contains($request, '1')) {
            return false;
        }
        return parent::handle($request);
    }
}
