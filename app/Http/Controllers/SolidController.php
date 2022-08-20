<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\SolidPrinciples\D\DModel;
use App\SolidPrinciples\I\IModel;
use App\SolidPrinciples\L\LModel;
use App\SolidPrinciples\O\OModel;
use App\SolidPrinciples\S\SModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class SolidController
 * @package App\Http\Controllers
 */
final class SolidController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function s(): View|Factory|Application
    {
        $name = SModel::getName();
        $content = SModel::getDescription();
        $return = (new SModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Factory|View|Application
     */
    public function o(): Factory|View|Application
    {
        $name = OModel::getName();
        $content = OModel::getDescription();
        $return = (new OModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function l(): View|Factory|Application
    {
        $name = LModel::getName();
        $content = LModel::getDescription();
        $return = (new LModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function i(): View|Factory|Application
    {
        $name = IModel::getName();
        $content = IModel::getDescription();
        $return = (new IModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function d(): View|Factory|Application
    {
        $name = DModel::getName();
        $content = DModel::getDescription();
        $return = (new DModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

}
