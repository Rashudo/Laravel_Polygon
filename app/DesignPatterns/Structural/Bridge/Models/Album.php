<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Models;

/**
 * Class Album
 * @package App\DesignPatterns\Structural\Bridge\Models
 */
final class Album
{
    public int $id = 10;

    public string $title = 'Nevermind';

    public string $description = 'Some desc of Album';

    public array $songs = [120, 145, 136, 189, 340];
}
