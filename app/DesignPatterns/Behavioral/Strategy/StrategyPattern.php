<?php


namespace App\DesignPatterns\Behavioral\Strategy;


use App\DesignPatterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;
use Illuminate\Support\Collection;
use App\Models\Workers;

class StrategyPattern
{
    /**
     * @var SalaryStrategyInterface
     */
    private $salaryStrategy;

    /**
     * @var
     */
    private $period;

    /**
     * @var Collection
     */
    private $users;

    public function __construct(array &$period, Collection &$users)
    {

        $this->period = $period;
        $this->users = $users;
    }

    public function handle()
    {
        $usersSalary = $this->calculateSalary();
        return $usersSalary;
    }

    /**
     * @return Collection
     */
    private function calculateSalary(): Collection
    {
        return $this->users->map(

            function ($user) {
                $strategy = $this->getStrategyByUser($user);
                $salary = $this
                    ->setCalculateStrategy($strategy)
                    ->calculateUserSalary($this->period, $user);

                $userId = $user->id;
                $strategyName = $strategy->getName();

                $newItem = compact('userId', 'salary', 'strategyName');

                return $newItem;
            }
        );
    }

    private function getStrategyByUser(Workers &$user)
    {
        $strategyName = $user->departmentName() . 'Strategy';
        $strategyClass = __NAMESPACE__ . '\\Strategies\\' . ucwords($strategyName);

        throw_if(!class_exists($strategyClass), \Exception::class, "Класс не существует [{$strategyClass}]");

        return new $strategyClass;
    }

    private function setCalculateStrategy(SalaryStrategyInterface &$strategy)
    {
        $this->salaryStrategy = $strategy;
        return $this;
    }

    private function calculateUserSalary(array &$period, &$user)
    {
        return $this->salaryStrategy->calc($period, $user);
    }


    public static function getName()
    {
        return 'Шаблон делегирования';
    }

    public static function getDescription()
    {
        return '
        <b>Стратегия</b> выносит набор алгоритмов в собственные классы и делает их взаимозаменяемыми.<br />
        <i>refactoring.guru</i><br /><br />
        Есть класс, в который отправляем набор каких-то элементов, этот класс определяет тип каждого элемента, в зависимости от чего выполняет какие-то функции (создает классы, которые реализуют один интерфейс).<br />
        Например, в данном случае, передается набор работников, Стратегия определяет, что за работник, создает соответсвующий класс, в котором есть метод calc, который считает зп. Возвращает id работника, зп и имя стратегии, по кторой считалось.
        ';
    }
}
