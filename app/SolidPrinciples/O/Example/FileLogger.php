<?php


namespace App\SolidPrinciples\O\Example;


class FileLogger extends ClassLogger
{

    public function log(string $string)
    {
        //Нарушается второй принцип sOlid
        //Так как может понадобиться запись в файл, например.
        //Придется менять это.
        $this->saveToFile($string);
    }

    private function saveToFile(string $string)
    {
        //save logs to db
    }
}
