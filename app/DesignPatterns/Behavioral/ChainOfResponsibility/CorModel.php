<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility;


use App\DesignPatterns\Behavioral\ChainOfResponsibility\Middlewares\InitMiddleware;

/**
 * Class CorModel
 * @package App\DesignPatterns\Behavioral\ChainOfResponsibility
 */
final class CorModel
{
    public static function getName(): string
    {
        return 'Цепочка обязанностей';
    }

    public static function getDescription(): string
    {
        return '
        <b>Цепочка обязанностей</b> это поведенческий паттерн, позволяющий передавать запрос по цепочке потенциальных обработчиков, пока один из них не обработает запрос.<br />
        <i>refactoring.guru</i><br /><br />
        Достаточно специфический паттерн, он похож на <a href="' . route('decorator') . '">Декоратора</a>, но только в декораторе нет прерывания цепочки, они лишь дополняют состояние объекта,
        а Цепочка обязанностей может прервать выполнение запроса.<br />
        Самый яркий и распространненый пример - это middleware в Laravel или Yii, запрос передается в следующий мидлвар по цепочке, если какая-то проверка не пройдется, то весь запрос прервется.<br />
        <i>route()->middleware("auth")->middleware("can:access")</i><br /><br />
        Так можно перехватывать запрос и отправлять его в воронку своих проверок.<br />
        Паттерн классный, после реализации его становится понятно, что он элегантен.<br />
        При создании начального middleware он регистрирует внутри себя <i>следующего</i> (если есть), <i>следующий</i> уже <b>внутри  себя</b> регистрирует следующего и так далее.<br />
        После того, как дернули выполнение метода у первоначального, он это выполнил и передал тому, кто у него был зареган следующим и так по цепочке.



        ';
    }

    public function run(): array
    {
        $handler = new InitMiddleware();
        $handler
            ->middleware("access")
            ->middleware("admin")
            ->middleware("throttlig");
        $request = 'AdminAccess1';
        $result['result'] = $handler->handle($request);
        return $result;
    }
}
