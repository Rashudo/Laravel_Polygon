<?php


namespace App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces;

/**
 * Interface WidgetRealizationInterface
 * @package App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces
 */
interface WidgetRealizationInterface
{

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return int
     */
    public function getLength(): int;
}
