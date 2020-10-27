<?php


namespace App\Http\Controllers;


use App\DesignPatterns\Behavioral\ChainOfResponsibility\CorModel;
use App\DesignPatterns\Behavioral\Command\CommandModel;
use App\DesignPatterns\Behavioral\Observer\ObserverModel;
use App\DesignPatterns\Behavioral\Strategy\StrategyPattern;
use App\DesignPatterns\Behavioral\TemplateMethod\TemplateMethodModel;
use Carbon\Carbon;
use App\DesignPatterns\Behavioral\State\StateModel;
use Illuminate\Support\Collection;
use App\Models\Workers;

class BehavioralPatternsController
{

    public function strategy()
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


    public function template_method()
    {
        $name = TemplateMethodModel::getName();
        $content = TemplateMethodModel::getDescription();

        $return = (new TemplateMethodModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function chain_of_responsibility()
    {
        $name = CorModel::getName();
        $content = CorModel::getDescription();

        $return = (new CorModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }


    public function command()
    {
        $name = CommandModel::getName();
        $content = CommandModel::getDescription();

        $return = (new CommandModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function observer()
    {
        $name = ObserverModel::getName();
        $content = ObserverModel::getDescription();

        $return = (new ObserverModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function state()
    {
        $name = StateModel::getName();
        $content = StateModel::getDescription();

        $return = (new StateModel())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }
}
