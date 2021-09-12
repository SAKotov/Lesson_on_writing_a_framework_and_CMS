<?php


namespace app\controllers;

class MainController extends AppController
{

    public function indexAction()
    {
        $posts = \R::FindAll('test');
        $this->setMeta('Главная страница', 'Описание...', 'Ключи');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jo'];
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}