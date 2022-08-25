<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Bridge\Bridge\Realization;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;
use App\DesignPatterns\Structural\Bridge\Models\Album;

/**
 * Class AlbumWidgetRealization
 * @package App\DesignPatterns\Structural\Bridge\Bridge\Realization
 */
final class AlbumWidgetRealization implements WidgetRealizationInterface
{

    /**
     * @param Album $entity
     */
    public function __construct(private Album $entity)
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
     * Тут Возвращаем title вместо Name
     * @return string
     */
    public function getName(): string
    {
        return $this->entity->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->entity->description;
    }

    /**
     * нужно вернуть int, но в альбоме не одна песня, будем складывать массив значений
     *
     * @return int
     */
    public function getLength(): int
    {
        return intval(array_sum($this->entity->songs));
    }
}
