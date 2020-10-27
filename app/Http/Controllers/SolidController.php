<?php


namespace App\Http\Controllers;

use App\SolidPrinciples\D\DModel;
use App\SolidPrinciples\I\IModel;
use App\SolidPrinciples\L\LModel;
use App\SolidPrinciples\O\OModel;
use App\SolidPrinciples\S\SModel;

class SolidController extends Controller
{

    public function s()
    {
        $name = SModel::getName();
        $content = SModel::getDescription();
        $return = (new SModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function o()
    {
        $name = OModel::getName();
        $content = OModel::getDescription();
        $return = (new OModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function l()
    {
        $name = LModel::getName();
        $content = LModel::getDescription();
        $return = (new LModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function i()
    {
        $name = IModel::getName();
        $content = IModel::getDescription();
        $return = (new IModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function d()
    {
        $name = DModel::getName();
        $content = DModel::getDescription();
        $return = (new DModel())->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

}
