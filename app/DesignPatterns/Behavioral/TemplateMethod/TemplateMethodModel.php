<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\TemplateMethod;


use App\DesignPatterns\Behavioral\TemplateMethod\Controllers\IndexController;

/**
 * Class TemplateMethodModel
 * @package App\DesignPatterns\Behavioral\TemplateMethod
 */
final class TemplateMethodModel
{
    public static function getName(): string
    {
        return 'Шаблонный метод';
    }

    public static function getDescription(): string
    {
        return '
        <b>Шаблонный метод</b> это поведенческий паттерн, задающий скелет алгоритма в суперклассе и заставляющий подклассы реализовать конкретные шаги этого алгоритма.<br />
        <i>refactoring.guru</i><br /><br />
        Другими словами, есть набор классов, у которых есть одинаковый функицонал. Этот функционал убирается в абстрактный класс, чтобы его нельзя было создать, но можно было наследовать. <br />
        В абстрактном классе есть методы, которые реализуют логику, есть методы, которые объявлены абстрактными, что вынуждает потомков реализовывать эти методы, есть хуки, методы, которые содержат логику, но могут быть перегружены.<br />
        Яркий пример - это контроллеры, есть базовый абстрактный контроллер, где есть логика, но есть абстрактный метод run, который должен быть реализован в потомке.

        ';
    }

    public function run(): array
    {
        $controller = new IndexController();
        return $controller->handleRequest();
    }
}
