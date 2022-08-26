<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Observer\Classes;


use SplObserver;
use SplSubject;

/**
 * Class UserRepository
 * @package App\DesignPatterns\Behavioral\Observer\Classes
 */
class UserRepository implements SplSubject
{
    /**
     * @var array Список пользователей.
     */
    private array $users = [];

    /**
     * @var array
     */
    private array $observers = [];


    public function __construct()
    {
        // Специальная группа событий для наблюдателей, которые хотят слушать
        // все события.
        $this->observers["*"] = [];
    }

    /**
     * @param SplObserver $observer
     * @param string $event
     * @return void
     */
    public function attach(SplObserver $observer, string $event = "*"): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    /**
     * @param string $event
     * @return void
     */
    private function initEventGroup(string $event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    /**
     * @param SplObserver $observer
     * @param string $event
     * @return void
     */
    public function detach(SplObserver $observer, string $event = "*"): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    /**
     * @param string $event
     * @return array
     */
    private function getEventObservers(string $event = "*"): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers["*"];

        return array_merge($group, $all);
    }

    /**
     * @param $filename
     * @return void
     */
    public function initialize($filename): void
    {
        // ...
        $this->notify("users:init", $filename);
    }

    // Вот методы, представляющие бизнес-логику класса.

    /**
     * @param string $event
     * @param $data
     * @return void
     */
    public function notify(string $event = "*", $data = null): void
    {
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($this, $event, $data);
        }
    }

    /**
     * @param array $data
     * @return User
     */
    public function createUser(array $data): User
    {
        $user = new User();
        $user->update($data);

        $id = rand(0, 100);
        $user->update(["id" => $id]);
        $this->users[$id] = $user;

        $this->notify("users:created", $user);

        return $user;
    }

    /**
     * @param User $user
     * @param array $data
     * @return User|null
     */
    public function updateUser(User $user, array $data): ?User
    {
        // ....
        $id = $user->attributes["id"];
        if (!isset($this->users[$id])) {
            return null;
        }

        $user = $this->users[$id];
        $user->update($data);

        $this->notify("users:updated", $user);

        return $user;
    }

    /**
     * @param User $user
     * @return void
     */
    public function deleteUser(User $user): void
    {
        // ...

        $id = $user->attributes["id"];
        if (!isset($this->users[$id])) {
            return;
        }

        unset($this->users[$id]);

        $this->notify("users:deleted", $user);
    }

}
