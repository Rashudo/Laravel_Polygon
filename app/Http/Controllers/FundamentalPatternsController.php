<?php


namespace App\Http\Controllers;


use App\DesignPatterns\Fundamental\Delegation\AppMessenger;

class FundamentalPatternsController
{

    public function delegationFabric()
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
