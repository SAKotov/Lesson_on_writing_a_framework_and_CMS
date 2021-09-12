<?php


namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{

    public function indexAction()
    {
        $posts = \R::FindAll('test');
        $this->setMeta('Главная страница', 'Описание...', 'Ключи');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jo', 'Mike'];
        $cache = Cache::instance();
        //$cache->set('test', $names);
        $cache->delete('test');
        $data = $cache->get('test');
        if (!$data)
        {
            $cache->set('test', $names);
        }
        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}