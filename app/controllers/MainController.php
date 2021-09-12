<?php


namespace app\controllers;

use ishop\App;

class MainController extends AppController
{

    public function indexAction()
    {
//        echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание...', 'Ключи');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jo'];
        $this->set(compact('name', 'age', 'names'));
    }
}