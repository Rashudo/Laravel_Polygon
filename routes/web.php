<?php

use App\Http\Controllers\{BehavioralPatternsController,
    CreationalPatternsController,
    FundamentalPatternsController,
    HomeController,
    SolidController,
    StructuralPatternsController
};
use Illuminate\Support\Facades\Route;

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
Route::get('/', HomeController::class)->name('home');

Route::get('fundamental/delegationFabric', [FundamentalPatternsController::class, 'delegationFabric'])->name(
    'delegation'
);

Route::prefix('solid')->group(function () {
    Route::get('s', [SolidController::class, 's'])->name('s');
    Route::get('o', [SolidController::class, 'o'])->name('o');
    Route::get('l', [SolidController::class, 'l'])->name('l');
    Route::get('i', [SolidController::class, 'i'])->name('i');
    Route::get('d', [SolidController::class, 'd'])->name('d');
});

Route::prefix('structural')->group(function () {
    Route::get('facade', [StructuralPatternsController::class, 'facade'])->name('facade');
    Route::get('adapter', [StructuralPatternsController::class, 'adapter'])->name('adapter');
    Route::get('decorator', [StructuralPatternsController::class, 'decorator'])->name(
        'decorator'
    );
    Route::get('bridge', [StructuralPatternsController::class, 'bridge'])->name('bridge');
    Route::get('proxy', [StructuralPatternsController::class, 'proxy'])->name('proxy');
    Route::get('composite', [StructuralPatternsController::class, 'composite'])->name('composite');
});

Route::prefix('creational')->group(function () {
    Route::get('factoryMethod', [CreationalPatternsController::class, 'factoryMethod'])->name('factoryMethod');
    Route::get('abstractFabric', [CreationalPatternsController::class, 'abstractFabric'])->name('abstractFabric');
    Route::get('staticFabric', [CreationalPatternsController::class, 'staticFabric'])->name('staticFabric');
    Route::get('simpleFabric', [CreationalPatternsController::class, 'simpleFabric'])->name('simpleFabric');
    Route::get('singletonMethod', [CreationalPatternsController::class, 'singletonMethod'])->name('singletonMethod');
    Route::get('multitonMethod', [CreationalPatternsController::class, 'multitonMethod'])->name('multitonMethod');
    Route::get('prototype', [CreationalPatternsController::class, 'prototype'])->name('prototype');
    Route::get('objectPool', [CreationalPatternsController::class, 'objectPool'])->name('objectPool');
    Route::get('builderMethod', [CreationalPatternsController::class, 'builderMethod'])->name('builderMethod');
    Route::get('lazyMethod', [CreationalPatternsController::class, 'lazyMethod'])->name('lazyMethod');
});

Route::prefix('behavioral')->group(function () {
    Route::get('strategy', [BehavioralPatternsController::class, 'strategy'])->name('strategy');
    Route::get('template_method', [BehavioralPatternsController::class, 'template_method'])->name('template_method');
    Route::get('chain_of_responsibility', [BehavioralPatternsController::class, 'chain_of_responsibility'])->name(
        'chain_of_responsibility'
    );
    Route::get('command', [BehavioralPatternsController::class, 'command'])->name('command');
    Route::get('observer', [BehavioralPatternsController::class, 'observer'])->name('observer');
    Route::get('state', [BehavioralPatternsController::class, 'state'])->name('state');
});
