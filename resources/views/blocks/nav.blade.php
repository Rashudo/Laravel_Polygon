<nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <div class="accordion text-left" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Solid принципы
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="list-group">
                        <a href="{{ route('s') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 's') ? 'active' : '' }} pl-4">Принцип единственной ответственности</a>
                        <a href="{{ route('o') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'o') ? 'active' : '' }} pl-4">Принцип открытости-закрытости</a>
                        <a href="{{ route('l') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'l') ? 'active' : '' }} pl-4">Принцип подстановки Барбары Лисков</a>
                        <a href="{{ route('i') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'i') ? 'active' : '' }} pl-4">Принцип разделения интерфейса</a>
                        <a href="{{ route('d') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'd') ? 'active' : '' }} pl-4">Принцип инверсии зависимостей</a>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Шаблоны программирования
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action list-group-item-secondary">Основные</a>
                        <a href="{{ route('delegation') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'delegation') ? 'active' : '' }} pl-4">Шаблон делегирования</a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">Порождающие</a>
                        <a href="{{ route('abstractFabric') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'abstractFabric') ? 'active' : '' }} pl-4">Абстрактная фабрика</a>
                        <a href="{{ route('staticFabric') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'staticFabric') ? 'active' : '' }} pl-4">Статичная фабрика</a>
                        <a href="{{ route('simpleFabric') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'simpleFabric') ? 'active' : '' }} pl-4">Простая фабрика</a>
                        <a href="{{ route('factoryMethod') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'factoryMethod') ? 'active' : '' }} pl-4">Фабричный метод</a>
                        <a href="{{ route('singletonMethod') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'singletonMethod') ? 'active' : '' }} pl-4">Одиночка</a>
                        <a href="{{ route('multitonMethod') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'multitonMethod') ? 'active' : '' }} pl-4">Пул одиночек</a>
                        <a href="{{ route('builderMethod') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'builderMethod') ? 'active' : '' }} pl-4">Строитель</a>
                        <a href="{{ route('lazyMethod') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'lazyMethod') ? 'active' : '' }} pl-4">Ленивая инициализация</a>
                        <a href="{{ route('prototype') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'prototype') ? 'active' : '' }} pl-4">Прототип (Клон)</a>
                        <a href="{{ route('objectPool') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'objectPool') ? 'active' : '' }} pl-4">Объектный пул</a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">Поведенческие</a>
                        <a href="{{ route('strategy') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'strategy') ? 'active' : '' }} pl-4">Стратегия</a>
                        <a href="{{ route('template_method') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'template_method') ? 'active' : '' }} pl-4">Шаблонный метод</a>
                        <a href="{{ route('chain_of_responsibility') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'chain_of_responsibility') ? 'active' : '' }} pl-4">Цепочка обязанностей</a>
                        <a href="{{ route('command') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'command') ? 'active' : '' }} pl-4">Команда</a>
                        <a href="{{ route('observer') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'observer') ? 'active' : '' }} pl-4">Наблюдатель</a>
                        <a href="{{ route('state') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'state') ? 'active' : '' }} pl-4">Состояние</a>

                        <a class="list-group-item list-group-item-action list-group-item-secondary">Структурные</a>
                        <a href="{{ route('facade') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'facade') ? 'active' : '' }} pl-4">Фасад</a>
                        <a href="{{ route('adapter') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'adapter') ? 'active' : '' }} pl-4">Адаптер</a>
                        <a href="{{ route('decorator') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'decorator') ? 'active' : '' }} pl-4">Декоратор</a>
                        <a href="{{ route('bridge') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'bridge') ? 'active' : '' }} pl-4">Мост</a>
                        <a href="{{ route('proxy') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'proxy') ? 'active' : '' }} pl-4">Заместитель</a>
                        <a href="{{ route('composite') }}" class="list-group-item list-group-item-action {{ (Route::currentRouteName() == 'composite') ? 'active' : '' }} pl-4">Компоновщик</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

