<?php


namespace App\SolidPrinciples\O\Example;


use Psr\Log\LoggerInterface;

/**
 * Class ClassLogger
 * @package App\SolidPrinciples\S\Example
 */
class ClassLogger
{

    public function log(string $string)
    {
        //Нарушается второй принцип sOlid
        //Так как может понадобиться запись в файл, например.
        //Придется менять это.
        $this->saveToDb($string);
    }

    private function saveToDb(string $string)
    {
        //save logs to db
    }
}
