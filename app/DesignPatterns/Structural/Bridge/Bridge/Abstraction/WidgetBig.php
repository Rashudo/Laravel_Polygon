<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Bridge\Abstraction;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;

/**
 * Class WidgetBig
 * @package App\DesignPatterns\Structural\Bridge\Bridge\Abstraction
 */
final class WidgetBig extends WidgetBase
{

    public function run(WidgetRealizationInterface $realization)
    {
        $this->setRealization($realization);
        $viewData = $this->makeViewData();
        return $this->makeWidget($viewData);
    }

    /**
     * Тут и есть вся суть. Мы используем фасад реализации, чтобы собрать виджет
     * Например, в этом виджете мы соединим название и Id.
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
    public function makeTitle(): string
    {
        return $this->getRealization()->getName() . ' #' . $this->getRealization()->getId();
    }
}
