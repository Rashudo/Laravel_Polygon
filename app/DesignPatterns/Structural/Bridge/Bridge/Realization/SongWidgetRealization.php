<?php


namespace App\DesignPatterns\Structural\Bridge\Bridge\Realization;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;
use App\DesignPatterns\Structural\Bridge\Models\Song;

class SongWidgetRealization implements WidgetRealizationInterface
{

    /**
     * @var Song
     */
    private $entity;

    /**
     * SongWidgetRealization constructor.
     * @param Song $song
     */
    public function __construct(Song $song)
    {
        $this->entity = $song;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->entity->id;
    }

    /**
     * Тут повезло, возвращаем Name, но где-то может быть title, например
     * @return string
     */
    public function getName()
    {
        return $this->entity->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->entity->description;
    }

    /**
     * Тут повезло, возвращаем длительность песни, в альбоме тут будем складывать
     *
     * @return int
     */
    public function getLength()
    {
        return $this->entity->length;
    }
}
