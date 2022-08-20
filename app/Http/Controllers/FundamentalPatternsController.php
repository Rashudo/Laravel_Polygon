<?php

declare(strict_types=1);

namespace App\Http\Controllers;


use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class FundamentalPatternsController
 * @package App\Http\Controllers
 */
final class FundamentalPatternsController extends Controller
{

    /**
     * @return Factory|View|Application
     */
    public function delegationFabric(): Factory|View|Application
    {
        $model = new AppMessenger();
        $model
            ->setSender('me@me.me')
            ->setRecipient('he@he.he')
            ->setMessage('It is email message')
            ->send();
        $return[] = $model->getMessage();

        $model
            ->toSms()
            ->setSender('111')
            ->setRecipient('222')
            ->setMessage('It is phone sms')
            ->send();
        $return[] = $model->getMessage();

        $name = $model->getName();
        $content = $model->getDescription();

        return view('patternsDesc', compact(['content', 'name', 'return']));
    }
}
