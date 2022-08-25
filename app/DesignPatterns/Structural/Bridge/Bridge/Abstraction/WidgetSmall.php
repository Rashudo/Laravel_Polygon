<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Bridge\Abstraction;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;

/**
 * Class WidgetBase
 * @package App\DesignPatterns\Structural\Bridge\Bridge\Abstraction
 */
final class WidgetSmall extends WidgetBase
{

    /**
     * @param WidgetRealizationInterface $realization
     * @return string
     */
    public function run(WidgetRealizationInterface $realization): string
    {
        $this->setRealization($realization);
        $viewData = $this->makeViewData();
        return $this->makeWidget($viewData);
    }

    /**
     * Тут и есть вся суть. Мы используем фасад реализации, чтобы собрать виджет
     * Например, в этом самом коротком виджете мы оставим только id.
     *  А вот длина песни или альбома посчитана в фасаде, нам главное, что там Int
     *
     * @return array
     */
    public function makeViewData(): array
    {
        $realisation = $this->getRealization();
        $desc = $realisation->getDescription();
        $length = $realisation->getLength();
        $title = $this->makeTitle();
        return compact('title', 'desc', 'length');
    }

    /**
     * Тут мы используем фасад реализации, чтобы собрать заголовок виджета
     * Например, в этом виджете мы соединим название и Id.
     *
     * @return string
     */
    public function makeTitle(): int
    {
        return $this->getRealization()->getId();
    }
}
