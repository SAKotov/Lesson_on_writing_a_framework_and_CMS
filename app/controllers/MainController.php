<?php


namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{

    public function indexAction()
    {
        $brands = \R::find('brand', 'LIMIT 3');
        $this->setMeta('Главная страница', 'Описание...', 'Ключи');
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
        $this->set(compact('brands', 'hits'));
    }
}
