<?php

declare(strict_types=1);

namespace App\SolidPrinciples\L\Example;

/**
 * Class BirdMove
 * @package App\SolidPrinciples\L\Example
 */
class BirdMove
{
    /**
     * BirdMove constructor.
     * @param Bird $bird
     */
    public function __construct(private Bird $bird)
    {
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
