<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Contracts\HttpSender;
use App\Services\Contracts\SaveArrayLog;
use Illuminate\Contracts\View\View;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
final class HomeController extends Controller
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
     * @return View
     */
    public function __invoke(HttpSender $sender): View
    {
        return view('home');
    }
}
