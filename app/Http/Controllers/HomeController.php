<?php

namespace App\Http\Controllers;


use App\Services\Contracts\HttpSender;
use App\Services\Contracts\SaveArrayLog;
use SimpleXMLElement;

class HomeController extends Controller
{
    /**
     * @var SaveArrayLog
     */
    public $arrayLogger;

    /**
     * HomeController constructor.
     * @param SaveArrayLog $arrayLogger
     */
    public function __construct(/*SaveArrayLog $arrayLogger*/)
    {
        //$this->arrayLogger = $arrayLogger;
        //$this->arrayLogger = SaveArrayToLog;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(HttpSender $sender)
    {
        return view('home');
    }
}
