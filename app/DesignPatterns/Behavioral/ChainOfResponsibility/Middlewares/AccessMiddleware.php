<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;

/**
 * Class InitMiddleware
 * @package App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares
 */
final class AccessMiddleware extends AbstractMiddleware
{
    /**
     * @param string $request
     * @return bool
     */
    public function handle(string $request): bool
    {
        if (!str_contains($request, 'Access')) {
            return false;
        }
        return parent::handle($request);
    }
}
