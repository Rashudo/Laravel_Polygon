<?php


namespace App\SolidPrinciples\O\Example;

/**
 * Class FileLogger
 * @package App\SolidPrinciples\O\Example
 */
class FileLogger extends ClassLogger
{

    /**
     * @param string $string
     */
    public function log(string $string)
    {
        //Нарушается второй принцип sOlid
        //Так как может понадобиться запись в файл, например.
        //Придется менять это.
        $this->saveToFile($string);
    }

    /**
     * @param string $string
     */
    private function saveToFile(string $string)
    {
        //save logs to db
    }
}
