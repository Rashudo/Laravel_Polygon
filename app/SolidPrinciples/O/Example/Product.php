<?php


namespace App\SolidPrinciples\O\Example;


use Exception;

/**
 * Class Product
 * @package App\SolidPrinciples\O\Example
 */
class Product
{
    /**
     * @var ClassLogger
     */
    private $logger;

    /**
     * Product constructor.
     * @param ClassLogger $logger
     */
    public function __construct(ClassLogger $logger)
    {
        $this->logger = $logger;
    }

    /**
     *
     */
    public function setPrice()
    {
        try {
            //set price
        } catch (Exception $exception) {
            $this->logger->log($exception->getMessage());
        }
    }
}
