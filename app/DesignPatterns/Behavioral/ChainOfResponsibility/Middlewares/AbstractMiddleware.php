<?php


namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares;


use App\DesignPatterns\Behavioral\ChainOfResponsibility\Interfaces\Handler;

abstract class AbstractMiddleware implements Handler
{
    /**
     * @var Handler
     */
    private $nextHandler;

    /**
     * @param Handler $handler
     * @return Handler
     */
    public function middleware(string $middleware): Handler
    {
        switch ($middleware) {
            case 'access':
                $this->nextHandler = new AccessMiddleware;
                break;
            case 'admin':
                $this->nextHandler = new AdminMiddleware;
                break;
            case 'throttlig':
                $this->nextHandler = new ThrottlingMiddleware;
                break;
        }

        return $this->nextHandler;
    }

    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): bool
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
        return true;
    }
}
