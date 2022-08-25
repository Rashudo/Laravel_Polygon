<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge;


use App\DesignPatterns\Structural\Bridge\Bridge\Abstraction\WidgetBig;
use App\DesignPatterns\Structural\Bridge\Bridge\Abstraction\WidgetMiddle;
use App\DesignPatterns\Structural\Bridge\Bridge\Abstraction\WidgetSmall;
use App\DesignPatterns\Structural\Bridge\Bridge\Realization\AlbumWidgetRealization;
use App\DesignPatterns\Structural\Bridge\Bridge\Realization\SongWidgetRealization;
use App\DesignPatterns\Structural\Bridge\Models\Album;
use App\DesignPatterns\Structural\Bridge\Models\Song;

/**
 * Class BridgeModel
 * @package App\DesignPatterns\Structural\Bridge
 */
class BridgeModel
{

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Мост';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
        <b>Мост</b> — это структурный паттерн проектирования, который разделяет один или несколько классов на две отдельные иерархии — абстракцию и реализацию, позволяя изменять их независимо друг от друга.<br />
        <i>refactoring.guru</i><br /><br />
        Яркий пример - это виджеты на сайте. Например, Яндекс.Музыка. Там есть несколько видов виджетов и несолько типов содержимого. Можно трэк вывести в виджет, можно альбом, можно описание, превью и тд.<br />
        Можно родить модель, скажем, песни, а дальше передавать её в класс WidgetBigProduct/WidgetSmallProduct/WidgetMiddleProduct. Потом родить модель категории, например, и передавать её в свои классы по созданию виджета. <br />
        Но если появится еще один виджет или вид контента для вывода в виджет - придется создавать много классов.<br />
        Эту проблему как раз и решает шаблон Мост. Он разделяет эту структуру на две иерархии, в данном случае, контент и виджеты.<br />
        Сами продукты (песня, альбом и тд) мы объединяем в некий интерфейс, в некий фасад, который будет отдавать то, что нужно для создания виджета. <br />
        После этого делаем архитектуру для виджетов, им без разницы, что именно им скармливают, они принимают интерфейс. И вот благодаря этому интерфейсу рисуется виджет.<br />
        Класс виджета рисует виджет, опираясь на атомарные методы скормленного ему объекта (фасада).<br />
        Например, объект большого виджета берет из фасада title и id композиции и объединяет их вместе для рисования сверху. <br />
        Объект средне виджета также опирается на фасад скормленного объекта, но использует только getTitle из фасада. А объект маленького виджета только getId, например.
        ';
    }

    /**
     * @return array
     */
    public function run(): array
    {
        $songRealization = new SongWidgetRealization(
            new Song
        );
        $albumRealization = new AlbumWidgetRealization(
            new Album
        );

        $widgets = [
            new WidgetBig,
            new WidgetMiddle,
            new WidgetSmall
        ];

        $return = [];
        foreach ($widgets as $widget) {
            $return[] = $widget->run($songRealization);
            $return[] = $widget->run($albumRealization);
        }

        return $return;
    }
}
