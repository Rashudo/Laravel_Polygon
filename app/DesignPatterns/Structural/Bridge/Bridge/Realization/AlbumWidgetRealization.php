<?php


namespace App\DesignPatterns\Structural\Bridge\Bridge\Realization;


use App\DesignPatterns\Structural\Bridge\Bridge\Realization\Interfaceces\WidgetRealizationInterface;
use App\DesignPatterns\Structural\Bridge\Models\Album;

class AlbumWidgetRealization implements WidgetRealizationInterface
{

    /**
     * @var Album
     */
    private $entity;


    public function __construct(Album $song)
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
     * Тут Возвращаем title вместо Name
     * @return string
     */
    public function getName()
    {
        return $this->entity->title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->entity->description;
    }

    /**
     * нужно вернуть int, но в альбоме не одна песня, будем складывать массив значений
     *
     * @return int
     */
    public function getLength()
    {
        return intval(array_sum($this->entity->songs));
    }
}
