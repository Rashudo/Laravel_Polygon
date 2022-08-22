<?php

declare(strict_types=1);

namespace App\SolidPrinciples\S\Example;

use Exception;

/**
 * Class Product
 * @package App\SolidPrinciples\S\Example
 */
class Product
{
    /**
     * Product constructor.
     * @param ClassLogger $logger
     */
    public function __construct(
        private ClassLogger $logger
    ) {
    }

    /**
     * @return void
     */
    public function setPrice(): void
    {
        try {
            //set price
        } catch (Exception $exception) {
            $this->logError($exception->getMessage()); //нарушает первый принцип Solid
            $this->logger->log($exception->getMessage()); //Не нарушает первый принцип Solid
        }
    }

    /**
     * Нарущается первый принцип Solid
     * Этот класс не должен заниматься записью логов.
     *
     * @param string $string
     */
    public function logError(string $string): void
    {
        //save logs to file
    }
}
