<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Bridge\Abstraction;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;

/**
 * Class WidgetBase
 * @package App\DesignPatterns\Structural\Bridge\Bridge\Abstraction
 */
abstract class WidgetBase
{
    /**
     * @var WidgetRealizationInterface
     */
    private WidgetRealizationInterface $realization;

    /**
     * @return WidgetRealizationInterface
     */
    public function getRealization(): WidgetRealizationInterface
    {
        return $this->realization;
    }

    /**
     * @param WidgetRealizationInterface $realization
     */
    public function setRealization(WidgetRealizationInterface $realization): void
    {
        $this->realization = $realization;
    }

    /**
     * @param array $viewData
     * @return string
     */
    public function makeWidget(array $viewData): string
    {
        return 'Класс: ' . class_basename(
                static::class
            ) . ', тайтл: |||' . $viewData['title'] . '||| описание: ' . $viewData['desc'] . ', длина: ' . $viewData['length'];
    }
}
