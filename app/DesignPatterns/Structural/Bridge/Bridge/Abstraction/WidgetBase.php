<?php


namespace App\DesignPatterns\Structural\Bridge\Bridge\Abstraction;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;

class WidgetBase
{
    /**
     * @var WidgetRealizationInterface
     */
    private $realization;

    /**
     * @param WidgetRealizationInterface $realization
     */
    public function setRealization(WidgetRealizationInterface $realization)
    {
        $this->realization = $realization;
    }

    /**
     * @return WidgetRealizationInterface
     */
    public function getRealization()
    {
        return $this->realization;
    }

    /**
     * @param array $viewData
     * @return string
     */
    public function makeWidget(array $viewData)
    {
        return 'Класс: ' . class_basename(static::class) . ', тайтл: |||' . $viewData['title'] . '||| описание: ' . $viewData['desc'] . ', длина: ' . $viewData['length'];
    }
}
