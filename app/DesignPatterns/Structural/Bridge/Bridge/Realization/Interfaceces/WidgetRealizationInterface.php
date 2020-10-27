<?php


namespace App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces;


interface WidgetRealizationInterface
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return int
     */
    public function getLength();
}
