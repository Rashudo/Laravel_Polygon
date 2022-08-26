<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Strategy;


use App\DesignPatterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;
use App\Models\Workers;
use Exception;
use Illuminate\Support\Collection;

/**
 * Class StrategyPattern
 * @package App\DesignPatterns\Behavioral\Strategy
 */
class StrategyPattern
{
    /**
     * @var SalaryStrategyInterface
     */
    private SalaryStrategyInterface $salaryStrategy;


    /**
     * @param array $period
     * @param Collection $users
     */
    public function __construct(
        private array $period,
        private Collection $users
    ) {
    }

    public static function getDescription(): string
    {
        return '
        <b>Стратегия</b> выносит набор алгоритмов в собственные классы и делает их взаимозаменяемыми.<br />
        <i>refactoring.guru</i><br /><br />
        Есть класс, в который отправляем набор каких-то элементов, этот класс определяет тип каждого элемента, в зависимости от чего выполняет какие-то функции (создает классы, которые реализуют один интерфейс).<br />
        Например, в данном случае, передается набор работников, Стратегия определяет, что за работник, создает соответсвующий класс, в котором есть метод calc, который считает зп. Возвращает id работника, зп и имя стратегии, по кторой считалось.
        ';
    }

    /**
     * @return Collection
     */
    public function handle(): Collection
    {
        return $this->calculateSalary();
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

    /**
     * @param Workers $user
     * @return SalaryStrategyInterface
     */
    private function getStrategyByUser(Workers $user): SalaryStrategyInterface
    {
        $strategyName = $user->departmentName() . 'Strategy';
        $strategyClass = __NAMESPACE__ . '\\Strategies\\' . ucwords($strategyName);

        throw_if(!class_exists($strategyClass), Exception::class, "Класс не существует [{$strategyClass}]");

        return new $strategyClass;
    }

    /**
     * @param array $period
     * @param $user
     * @return int
     */
    private function calculateUserSalary(array $period, $user): int
    {
        return $this->salaryStrategy->calc($period, $user);
    }

    /**
     * @param SalaryStrategyInterface $strategy
     * @return $this
     */
    private function setCalculateStrategy(SalaryStrategyInterface $strategy): static
    {
        $this->salaryStrategy = $strategy;
        return $this;
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Шаблон делегирования';
    }
}
