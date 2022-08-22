<?php

declare(strict_types=1);

namespace App\SolidPrinciples\S\Example;


/**
 * Class ClassLogger
 * @package App\SolidPrinciples\S\Example
 */
class ClassLogger
{

    /**
     * @param string $string
     */
    public function log(string $string): void
    {
        $this->saveToDb($string);
    }

    /**
     * @param string $string
     */
    private function saveToDb(string $string): void
    {
        //save logs to db
    }
}
