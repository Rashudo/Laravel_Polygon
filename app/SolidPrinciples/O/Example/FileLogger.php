<?php

declare(strict_types=1);

namespace App\SolidPrinciples\O\Example;

/**
 * Class FileLogger
 * @package App\SolidPrinciples\O\Example
 */
final class FileLogger extends ClassLogger
{

    /**
     * @param string $string
     */
    public function log(string $string): void
    {
        //Теперь второй принцип не нарушается
        $this->saveToFile($string);
    }

    /**
     * @param string $string
     */
    private function saveToFile(string $string)
    {
        //save logs to file
    }
}
