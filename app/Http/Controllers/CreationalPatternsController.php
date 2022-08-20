<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DesignPatterns\Creational\AbstractFactory\AbstractFactoryModel;
use App\DesignPatterns\Creational\Builder\BuilderClass;
use App\DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use App\DesignPatterns\Creational\LazyInitialization\LazyInitialization;
use App\DesignPatterns\Creational\Multiton\MultitonClass;
use App\DesignPatterns\Creational\ObjectPool\ObjectPoolDemo;
use App\DesignPatterns\Creational\Prototye\PrototypeDemo;
use App\DesignPatterns\Creational\SimpleFactory\SimpleFactoryModel;
use App\DesignPatterns\Creational\Singleton\SingletonClass;
use App\DesignPatterns\Creational\StaticFactory\StaticFactoryModel;
use App\Services\Facades\SaveArrayToLog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class CreationalPatternsController
 * @package App\Http\Controllers
 */
final class CreationalPatternsController extends Controller
{

    /**
     * @param SaveArrayToLog $arrayToLog
     * @return Factory|View|Application
     */
    public function abstractFabric(SaveArrayToLog $arrayToLog
    ): Factory|View|Application {
        $model = new AbstractFactoryModel();
        $elem = $model->createFactory('woodenDoor');
        $elem->setDoor();
        $elem->setMaster();
        $return[] = $elem->getDescription();

        $elem = $model->createFactory('ironDoor');
        $elem->setDoor();
        $elem->setMaster();
        $return[] = $elem->getDescription();

        $name = $model->getName();
        $content = $model->getDescription();
        //$this->arrayLogger->save($return);
        //SaveArrayToLog::save($return);
        $arrayToLog::save($return);

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }


    /**
     * @return Factory|View|Application
     */
    public function staticFabric(): Factory|View|Application
    {
        $name = StaticFactoryModel::getName();
        $content = StaticFactoryModel::getDescription();

        $return[] = StaticFactoryModel::build('email')->getMessage();
        $return[] = StaticFactoryModel::build('sms')->getMessage();

        //$this->arrayLogger->save($return);
        //SaveArrayToLog::save();
        SaveArrayToLog::save($return);

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Factory|View|Application
     */
    public function simpleFabric(): Factory|View|Application
    {
        $name = SimpleFactoryModel::getName();
        $content = SimpleFactoryModel::getDescription();

        $simpleFabric = new SimpleFactoryModel();

        $return[] = $simpleFabric->build('email')->getMessage();
        $return[] = $simpleFabric->build('sms')->getMessage();
        //$this->arrayLogger->save($return);
        SaveArrayToLog::save($return);

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Factory|View|Application
     */
    public function factoryMethod(): Factory|View|Application
    {
        $name = FactoryMethod::getName();
        $content = FactoryMethod::getDescription();

        $return = (new FactoryMethod())->useFactoryMethod();
        //$this->arrayLogger->save($return);
        SaveArrayToLog::save($return);

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function singletonMethod(): View|Factory|Application
    {
        $name = SingletonClass::getName();
        $content = SingletonClass::getDescription();

        $return = SingletonClass::getInstance()->getTest();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Factory|View|Application
     */
    public function multitonMethod(): Factory|View|Application
    {
        $name = MultitonClass::getName();
        $content = MultitonClass::getDescription();

        $return[] = MultitonClass::getInstance('mysql')->getKey();
        $return[] = MultitonClass::getInstance('mongo')->getKey();
        $return[] = MultitonClass::getInstance('mysql')->getKey();
        $return[] = MultitonClass::getInstance('mongo')->getKey();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Factory|View|Application
     */
    public function builderMethod(): View|Factory|Application
    {
        $name = BuilderClass::getName();
        $content = BuilderClass::getDescription();

        $return[] = BuilderClass::builderHandler();
        $return[] = BuilderClass::builderManager();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function lazyMethod(): View|Factory|Application
    {
        $name = LazyInitialization::getName();
        $content = LazyInitialization::getDescription();

        $lazyExample = new LazyInitialization();

        $return[] = $lazyExample->getOrder()->id;
        $return[] = $lazyExample->getOrder()->sum;

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Factory|View|Application
     */
    public function prototype(): Factory|View|Application
    {
        $name = PrototypeDemo::getName();
        $content = PrototypeDemo::getDescription();

        $return = (new PrototypeDemo())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Factory|View|Application
     */
    public function objectPool(): Factory|View|Application
    {
        $name = ObjectPoolDemo::getName();
        $content = ObjectPoolDemo::getDescription();

        $return = (new ObjectPoolDemo())->run();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

}
