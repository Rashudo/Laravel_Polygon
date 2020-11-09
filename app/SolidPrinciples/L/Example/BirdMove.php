<?php


namespace App\SolidPrinciples\L\Example;

/**
 * Class BirdMove
 * @package App\SolidPrinciples\L\Example
 */
class BirdMove
{

    /**
     * @var Bird
     */
    private $bird;

    /**
     * BirdMove constructor.
     * @param Bird $bird
     */
    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    /**
     * @return int
     */
    public function run(): int
    {
        $flySpeed = $this->bird->fly(); // Тут ожидается Integer, потому что в Bird именно так
        return $flySpeed;
    }
}
