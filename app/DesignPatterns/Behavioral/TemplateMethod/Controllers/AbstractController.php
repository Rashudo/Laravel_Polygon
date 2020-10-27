<?php


namespace App\DesignPatterns\Behavioral\TemplateMethod\Controllers;


abstract class AbstractController
{

    /**
     * @return array
     */
    public function handleRequest(): array
    {
        $return[] = $this->prepareData();
        $return[] = $this->run();
        $return[] = $this->hook();
        $return[] = $this->render();
        return $return;
    }

    protected function prepareData(): string
    {
        return __METHOD__;
    }

    /**
     * Потомки обязаны реализовать этот метод
     *
     * @return array
     */
    abstract function run(): string;

    /**
     * Этот метод может быть пустым, а может быть переопределен в дочерних
     */
    protected function hook()
    {
    }

    /**
     * @return string
     */
    protected function render(): string
    {
        return __METHOD__;
    }

}
