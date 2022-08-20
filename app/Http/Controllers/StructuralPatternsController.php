<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DesignPatterns\Structural\Adapter\Classes\LibsAdapter;
use App\DesignPatterns\Structural\Adapter\Classes\SelfWrittenLib;
use App\DesignPatterns\Structural\Adapter\Interfaces\SelfWrittenInterface;
use App\DesignPatterns\Structural\Bridge\BridgeModel;
use App\DesignPatterns\Structural\Composite\CompositeExample;
use App\DesignPatterns\Structural\Decorator\DecoratorExample;
use App\DesignPatterns\Structural\Facade\OrderSaveFacade;
use App\DesignPatterns\Structural\Proxy\ProxyModel;
use App\Models\Order;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class StructuralPatternsController
 * @package App\Http\Controllers
 */
final class StructuralPatternsController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function facade(): View|Factory|Application
    {
        $name = OrderSaveFacade::getName();
        $content = OrderSaveFacade::getDescription();

        $order = new Order();
        $data = request()->all();

        $return = (new OrderSaveFacade())->save($order, $data);

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function adapter(): View|Factory|Application
    {
        $name = LibsAdapter::getName();
        $content = LibsAdapter::getDescription();
        $return = [];

        $oldLib = app(SelfWrittenLib::class);
        $return[] = $oldLib->method_one(); //Работали со старой либой

        //$adapter = app(LibsAdapter::class);
        $adapter = app(
            SelfWrittenInterface::class
        ); //Ларавель вей. Solid. Создать экземпляр класса указанием интерфейса.
        //Но указать это в bindings AppServiceProvider
        $return[] = $adapter->method_one(); //Работаем уже с новой библиотекой, но по старым методам


        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function decorator(): View|Factory|Application
    {
        $name = DecoratorExample::getName();
        $content = DecoratorExample::getDescription();

        $return = (new DecoratorExample)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function bridge(): View|Factory|Application
    {
        $name = BridgeModel::getName();
        $content = BridgeModel::getDescription();

        $return = (new BridgeModel)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function proxy(): View|Factory|Application
    {
        $name = ProxyModel::getName();
        $content = ProxyModel::getDescription();

        $return = (new ProxyModel)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    /**
     * @return Application|Factory|View
     */
    public function composite(): View|Factory|Application
    {
        $name = CompositeExample::getName();
        $content = CompositeExample::getDescription();

        $return = (new CompositeExample)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }
}
