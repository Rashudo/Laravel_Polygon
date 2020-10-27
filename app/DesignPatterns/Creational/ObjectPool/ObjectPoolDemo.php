<?php


namespace App\DesignPatterns\Creational\ObjectPool;


use App\DesignPatterns\Creational\ObjectPool\Classes\CreditCard;
use App\DesignPatterns\Creational\ObjectPool\Classes\User;

class ObjectPoolDemo
{
    /**
     * @var ObjectPool
     */
    public $objPool;

    public function __construct()
    {
        $this->objPool = ObjectPool::getInstance();

        $user = new User();
        $creditCard = new CreditCard();

        $this->objPool
            ->addObject($user) //завели прототип юзера
            ->addObject($creditCard); //завели прототип карты

    }

    public function run()
    {
        $creditCard = $this->objPool->getObject(CreditCard::class);
        $creditCard->number = '0000 1111 2222 3333';
        $creditCard->date = '11/12';
        $creditCard->cvc = '666';

        $user = $this->objPool->getObject(User::class);
        $user->name = 'Bob';

        $user2 = $this->objPool->getObject(User::class); // false, потому что не отпустили прошлого пользователя

        $this->objPool->release($creditCard);
        $this->objPool->release($user);// все, в пуле только прототипы

        return ["creditCard" => $creditCard, "user" => $user, "user2" => 'User2 ' . (($user2) ? 'exists' : 'does not exist')];

    }


    public static function getName()
    {
        return 'Пул объектов';
    }

    public static function getDescription()
    {
        return '
           Объектный пул (англ. object pool) — порождающий шаблон проектирования, набор инициализированных и готовых к использованию объектов. Когда системе требуется объект, он не создаётся, а берётся из пула. Когда объект больше не нужен, он не уничтожается, а возвращается в пул.<br />
           ---------------------------<br />
           Есть синглтон, который хранит в себе прототипы каких-то объектов, этот синглтон заботится о том, что методы будут как-то по особенному созданы, а также после работы с этими объектами они очистятся.<br />
           Это как раз достигается тем, что создается прототип, а при вызове этого объекта - создается клон.


            ';
    }
}
