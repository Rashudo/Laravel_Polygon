<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\ObjectPool;


use App\DesignPatterns\Creational\ObjectPool\Interfaces\ObjectPoolableInterface;
use App\DesignPatterns\Creational\Singleton\Traits\SingletonTrait;

/**
 * Class ObjectPool
 * @package App\DesignPatterns\Creational\ObjectPool
 */
class ObjectPool
{
    use SingletonTrait;

    /**
     * @var array
     */
    private array $cloneObject = [];

    /**
     * @var array
     */
    private array $prototypes = [];

    /**
     * Добавляем объект в пул. Он становится неизменяемым прототипом
     *
     * @param ObjectPoolableInterface $object
     * @return $this
     */
    public function addObject(ObjectPoolableInterface $object): static
    {
        $key = $this->getObjKey($object);
        $this->prototypes[$key] = $object;

        return $this;
    }

    /**
     * @param $object
     * @return string
     */
    private function getObjKey(&$object): string
    {
        return (is_object($object)) ? get_class($object) : strval($object);
    }

    /**
     * Возвращается клон прототипа
     * Если объект уже вызывался, то выозвращается false, типа, занят объект
     * Если объекта вообще нет, то Null,
     * Иначе возвращается клон прототипа.
     *
     * @param string $className
     * @return bool|mixed|null
     */
    public function getObject(string $className): mixed
    {
        $key = $this->getObjKey($className);

        if (isset($this->cloneObject[$key])) {
            return false;
        }

        if (empty($this->prototypes[$key])) {
            return null;
        }

        $this->cloneObject[$key] = clone $this->prototypes[$key];

        return $this->cloneObject[$key];
    }

    /**
     * Высвобождается объект
     *
     * @param ObjectPoolableInterface $object
     */
    public function release(ObjectPoolableInterface $object): void
    {
        $key = $this->getObjKey($object);
        unset($this->cloneObject[$key]);
    }


}
