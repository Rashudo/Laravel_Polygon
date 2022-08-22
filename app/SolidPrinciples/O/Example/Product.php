<?php

declare(strict_types=1);

namespace App\SolidPrinciples\O\Example;


use Exception;

/**
 * Class Product
 * @package App\SolidPrinciples\O\Example
 */
class Product
{

    /**
     * Product constructor.
     * @param ClassLogger $logger
     */
    public function __construct(private ClassLogger $logger)
    {
    }

    /**
     * @return void
     */
    public function setPrice(): void
    {
        try {
            //set price
        } catch (Exception $exception) {
            $this->logger->log($exception->getMessage());
        }
    }
}
