<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Models;

/**
 * Class Album
 * @package App\DesignPatterns\Structural\Bridge\Models
 */
final class Song
{
    public int $id = 5;

    public string $name = 'The man who sold the world';

    public string $description = 'Some desc of song';

    public int $length = 320;
}
