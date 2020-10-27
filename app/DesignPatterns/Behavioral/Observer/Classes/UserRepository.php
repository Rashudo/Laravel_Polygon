<?php


namespace App\DesignPatterns\Behavioral\Observer\Classes;


use SplObserver;

class UserRepository implements \SplSubject
{
    /**
     * @var array Список пользователей.
     */
    private $users = [];

    /**
     * @var array
     */
    private $observers = [];

    public function __construct()
    {
        // Специальная группа событий для наблюдателей, которые хотят слушать
        // все события.
        $this->observers["*"] = [];
    }

    public function attach(SplObserver $observer, string $event = "*")
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }



    public function detach(SplObserver $observer, string $event = "*")
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = "*", $data = null)
    {
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($this, $event, $data);
        }
    }

    private function initEventGroup(string $event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = "*"): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers["*"];

        return array_merge($group, $all);
    }

    // Вот методы, представляющие бизнес-логику класса.

    public function initialize($filename): void
    {

        // ...
        $this->notify("users:init", $filename);
    }

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

    public function updateUser(User $user, array $data): User
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
