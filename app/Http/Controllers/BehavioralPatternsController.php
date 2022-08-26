<?php

declare(strict_types=1);

namespace App\Http\Controllers;


use App\DesignPatterns\Behavioral\ChainOfResponsibility\CorModel;
use App\DesignPatterns\Behavioral\Command\CommandModel;
use App\DesignPatterns\Behavioral\Observer\ObserverModel;
use App\DesignPatterns\Behavioral\State\StateModel;
use App\DesignPatterns\Behavioral\Strategy\StrategyPattern;
use App\DesignPatterns\Behavioral\TemplateMethod\TemplateMethodModel;
use App\Models\Workers;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;


/**
 * Class BehavioralPatternsController
 * @package App\Http\Controllers
 */
final class BehavioralPatternsController
{

    /**
     * @return View
     */
    public function strategy(): View
    {
        $name = StrategyPattern::getName();
        $content = StrategyPattern::getDescription();
        $period = [
            Carbon::now()->subMonth()->startOfMonth(),
            Carbon::now()->subMonth()->endOfMonth(),
        ];

        $users = new Collection();
        for ($i = 0; $i < 2; $i++) {
            $users->add((new Workers()));
        }

        $return[] = (new StrategyPattern($period, $users))->handle();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }


    /**
     * @return View
     */
    public function template_method(): View
    {
        $name = TemplateMethodModel::getName();
        $content = TemplateMethodModel::getDescription();

        $return = (new TemplateMethodModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return View
     */
    public function chain_of_responsibility(): View
    {
        $name = CorModel::getName();
        $content = CorModel::getDescription();

        $return = (new CorModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }


    /**
     * @return View
     */
    public function command(): View
    {
        $name = CommandModel::getName();
        $content = CommandModel::getDescription();

        $return = (new CommandModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return View
     */
    public function observer(): View
    {
        $name = ObserverModel::getName();
        $content = ObserverModel::getDescription();

        $return = (new ObserverModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return View
     */
    public function state(): View
    {
        $name = StateModel::getName();
        $content = StateModel::getDescription();

        $return = (new StateModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }
}
