<?php


namespace App\DesignPatterns\Creational\ObjectPool;


use App\DesignPatterns\Creational\Singleton\Traits\SingletonTrait;
use App\DesignPatterns\Creational\ObjectPool\Interfaces\ObjectPoolableInterface;

class ObjectPool
{
    use SingletonTrait;

    /**
     * @var array
     */
    private $clone = [];

    /**
     * @var array
     */
    private $prototypes = [];

    /**
     * Добавляем объект в пул. Он становится неизменяемым прототипом
     *
     * @param ObjectPoolableInterface $object
     * @return $this
     */
    public function addObject(ObjectPoolableInterface $object)
    {
        $key = $this->getObjKey($object);
        $this->prototypes[$key] = $object;

        return $this;
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
    public function getObject(string $className)
    {
        $key = $this->getObjKey($className);

        if (isset($this->clone[$key])) {
            return false;
        }

        if (empty($this->prototypes[$key])) {
            return null;
        }

        $this->clone[$key] = clone $this->prototypes[$key];

        return $this->clone[$key];
    }

    /**
     * Высвобождается объект
     *
     * @param ObjectPoolableInterface $object
     */
    public function release(ObjectPoolableInterface $object): void
    {
        $key = $this->getObjKey($object);
        unset($this->clone[$key]);
        $object = null;
    }


    private function getObjKey(&$object)
    {
        return (is_object($object)) ? get_class($object) : strval($object);
    }



}
