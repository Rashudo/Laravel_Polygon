<?php


namespace App\SolidPrinciples\S\Example;

/**
 * Class Product
 * @package App\SolidPrinciples\S\Example
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
        } catch (\Exception $exception) {
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
