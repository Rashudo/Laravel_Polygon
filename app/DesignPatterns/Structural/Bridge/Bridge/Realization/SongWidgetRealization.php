<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Bridge\Realization;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;
use App\DesignPatterns\Structural\Bridge\Models\Song;

/**
 * Class SongWidgetRealization
 * @package App\DesignPatterns\Structural\Bridge\Bridge\Realization
 */
final class SongWidgetRealization implements WidgetRealizationInterface
{

    /**
     * @param Song $entity
     */
    public function __construct(private Song $entity)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->entity->id;
    }

    /**
     * Тут повезло, возвращаем Name, но где-то может быть title, например
     * @return string
     */
    public function getName(): string
    {
        return $this->entity->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->entity->description;
    }

    /**
     * Тут повезло, возвращаем длительность песни, в альбоме тут будем складывать
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->entity->length;
    }
}
