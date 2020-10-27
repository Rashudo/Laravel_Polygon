<?php


namespace App\Http\Controllers;


use App\DesignPatterns\Structural\Adapter\Classes\LibsAdapter;
use App\DesignPatterns\Structural\Adapter\Classes\SelfWrittenLib;
use App\DesignPatterns\Structural\Adapter\Interfaces\SelfWrittenInterface;
use App\DesignPatterns\Structural\Bridge\BridgeModel;
use App\DesignPatterns\Structural\Composite\CompositeExample;
use App\DesignPatterns\Structural\Facade\OrderSaveFacade;
use App\Models\Order;
use App\DesignPatterns\Structural\Decorator\DecoratorExample;
use App\DesignPatterns\Structural\Proxy\ProxyModel;

class StructuralPatternsController
{

    public function facade()
    {
        $name = OrderSaveFacade::getName();
        $content = OrderSaveFacade::getDescription();

        $order = new Order();
        $data = request()->all();

        $return = (new OrderSaveFacade())->save($order, $data);

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function adapter()
    {
        $name = LibsAdapter::getName();
        $content = LibsAdapter::getDescription();
        $return = [];

        $oldLib = app(SelfWrittenLib::class);
        $return[] = $oldLib->method_one(); //Работали со старой либой

        //$adapter = app(LibsAdapter::class);
        $adapter = app(SelfWrittenInterface::class); //Ларавель вей. Solid. Создать экземпляр класса указанием интерфейса.
        //Но указать это в bindings AppServiceProvider
        $return[] = $adapter->method_one(); //Работаем уже с новой библиотекой, но по старым методам


        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function decorator()
    {
        $name = DecoratorExample::getName();
        $content = DecoratorExample::getDescription();

        $return = (new DecoratorExample)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function bridge()
    {
        $name = BridgeModel::getName();
        $content = BridgeModel::getDescription();

        $return = (new BridgeModel)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function proxy()
    {
        $name = ProxyModel::getName();
        $content = ProxyModel::getDescription();

        $return = (new ProxyModel)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }

    public function composite()
    {
        $name = CompositeExample::getName();
        $content = CompositeExample::getDescription();

        $return = (new CompositeExample)->run();
        return view('patternsDesc', compact(['content', 'name', 'return']));
    }
}
