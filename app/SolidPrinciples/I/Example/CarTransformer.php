<?php

declare(strict_types=1);

namespace App\SolidPrinciples\I\Example;


use App\SolidPrinciples\I\Example\Interfaces\CarTransformerInterface;

/**
 * Class CarTransformer
 * @package App\SolidPrinciples\I\Example
 */
class CarTransformer implements CarTransformerInterface
{

    /**
     * @return void
     */
    public function toCar(): void
    {
        // TODO: Implement toCar() method.
    }
}
