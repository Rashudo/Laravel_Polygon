<?php


namespace App\DesignPatterns\Structural\Bridge\Bridge\Abstraction;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;

class WidgetSmall extends WidgetBase
{

    public function run(WidgetRealizationInterface $realization)
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
    public function makeViewData()
    {
        $realisation = $this->getRealization();
        $desc = $realisation->getDescription();
        $length = $realisation->getLength();
        $title = $this->makeTitle();
        return compact('title', 'desc', 'length');
    }

    public function makeTitle()
    {
        return $this->getRealization()->getId();
    }
}
