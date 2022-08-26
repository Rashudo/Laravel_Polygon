<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;


use App\DesignPatterns\Behavioral\ChainOfResponsibility\Interfaces\Handler;

/**
 * Class AbstractMiddleware
 * @package App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares
 */
abstract class AbstractMiddleware implements Handler
{
    /**
     * @var Handler
     */
    private Handler $nextHandler;

    /**
     * @param string $middleware
     * @return Handler
     */
    public function middleware(string $middleware): Handler
    {
        $this->nextHandler = match ($middleware) {
            'access' => new AccessMiddleware,
            'admin' => new AdminMiddleware,
            'throttlig' => new ThrottlingMiddleware,
        };

        return $this->nextHandler;
    }

    /**
     * @param string $request
     * @return bool
     */
    public function handle(string $request): bool
    {
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }
        return true;
    }
}
