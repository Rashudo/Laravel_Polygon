<?php

declare(strict_types=1);

namespace App\DesignPatterns\Structural\Proxy;


use App\DesignPatterns\Structural\Proxy\Models\DBConnector;
use App\DesignPatterns\Structural\Proxy\Models\DbProxy;

/**
 * Class ProxyModel
 * @package App\DesignPatterns\Structural\Proxy
 */
final class ProxyModel
{

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Заместитель';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
        <b>Заместитель</b> (Proxy) — Заместитель — это структурный паттерн проектирования, который позволяет подставлять вместо реальных объектов специальные объекты-заменители. Эти объекты перехватывают вызовы к оригинальному объекту, позволяя сделать что-то до или после передачи вызова оригиналу.<br />
        <i>refactoring.guru</i><br /><br />
        Отчасти этот паттерн похож на <a href="' . route('proxy') . '">фасад</a>, только у фасада свой интерфейс, к тому же он может у себя хранить экземпляры разных объектов, а у <b>заместителя</b> точно такой же интерфейс, как и у сервисного объекта.<br />
        Проблема может быть в том, что мы клиентским классам скармливаем какой-то базовый объект, например, подключение к БД. А потом мы, например, хотим логгировать, что идет к БД, или кэшировать, или проверить уровень доступа. Тогда мы создаем <b>заместителя</b>, у которого <u>точно такой же интерфейс, как и у базового объекта</u>.<br />
        В итоге заместитель как бы перехватывает работу с базовым объектом, мы можем до или после какого-то действия в базовом объекте что-то сделать, самое простое логгировать.<br />
        Например, <br />
        <code><br />
        $this->db->save();<br />
        </code><br />
        В базовом объекте db мы просто сохраним данные, а в ProxyDb сделаем замер времени.<br />
        <code><br />
        public function save()<br />
        {<br />

            $start = microtime(true);<br />
            $this->object->save();<br />
            $time = microtime(true) - $start;<br />
        }<br />

        </code>
        ';
    }

    /**
     * @return array
     */
    public function run(): array
    {
        $db = new DbProxy(new DBConnector());
        $db->save();
        $return['save_time'] = $db->time;
        $return['get_first'] = $db->get();
        $return['get_second'] = $db->get();
        return $return;
    }
}
