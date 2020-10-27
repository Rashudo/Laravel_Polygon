<?php


namespace App\SolidPrinciples\S\Example;


/**
 * Class ClassLogger
 * @package App\SolidPrinciples\S\Example
 */
class ClassLogger
{

    public function log(string $string)
    {

        $this->saveToDb($string);
    }

    private function saveToDb(string $string)
    {
        //save logs to db
    }
}
