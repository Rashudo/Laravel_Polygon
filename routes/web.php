<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('fundamental/delegationFabric', 'FundamentalPatternsController@delegationFabric')->name('delegation');

Route::prefix('solid')->group(function () {
    Route::get('s', 'SolidController@s')->name('s');
    Route::get('o', 'SolidController@o')->name('o');
    Route::get('l', 'SolidController@l')->name('l');
    Route::get('i', 'SolidController@i')->name('i');
    Route::get('d', 'SolidController@d')->name('d');
});

Route::prefix('structural')->group(function () {
    Route::get('facade', 'StructuralPatternsController@facade')->name('facade');
    Route::get('adapter', 'StructuralPatternsController@adapter')->name('adapter');
    Route::get('decorator', 'StructuralPatternsController@decorator')->name('decorator');
    Route::get('bridge', 'StructuralPatternsController@bridge')->name('bridge');
    Route::get('proxy', 'StructuralPatternsController@proxy')->name('proxy');
    Route::get('composite', 'StructuralPatternsController@composite')->name('composite');
});

Route::prefix('creational')->group(function () {
    Route::get('factoryMethod', 'CreationalPatternsController@factoryMethod')->name('factoryMethod');
    Route::get('abstractFabric', 'CreationalPatternsController@abstractFabric')->name('abstractFabric');
    Route::get('staticFabric', 'CreationalPatternsController@staticFabric')->name('staticFabric');
    Route::get('simpleFabric', 'CreationalPatternsController@simpleFabric')->name('simpleFabric');
    Route::get('singletonMethod', 'CreationalPatternsController@singletonMethod')->name('singletonMethod');
    Route::get('multitonMethod', 'CreationalPatternsController@multitonMethod')->name('multitonMethod');
    Route::get('prototype', 'CreationalPatternsController@prototype')->name('prototype');
    Route::get('objectPool', 'CreationalPatternsController@objectPool')->name('objectPool');
    Route::get('builderMethod', 'CreationalPatternsController@builderMethod')->name('builderMethod');
    Route::get('lazyMethod', 'CreationalPatternsController@lazyMethod')->name('lazyMethod');

});

Route::prefix('behavioral')->group(function () {
    Route::get('strategy', 'BehavioralPatternsController@strategy')->name('strategy');
    Route::get('template_method', 'BehavioralPatternsController@template_method')->name('template_method');
    Route::get('chain_of_responsibility', 'BehavioralPatternsController@chain_of_responsibility')->name('chain_of_responsibility');
    Route::get('command', 'BehavioralPatternsController@command')->name('command');
    Route::get('observer', 'BehavioralPatternsController@observer')->name('observer');
    Route::get('state', 'BehavioralPatternsController@state')->name('state');

});


