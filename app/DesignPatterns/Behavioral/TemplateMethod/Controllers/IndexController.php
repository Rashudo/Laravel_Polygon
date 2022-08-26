<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\TemplateMethod\Controllers;


/**
 * Class IndexController
 * @package App\DesignPatterns\Behavioral\TemplateMethod\Controllers
 */
final class IndexController extends AbstractController
{
    /**
     * @return string
     */
    public function run(): string
    {
        return __METHOD__;
    }

    /**
     * @return string
     */
    protected function hook(): string
    {
        parent::hook();
        return __METHOD__;
    }
}
