<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
    public function index()
    {
        $data = ['name' => 'Artem'];
        $this->view->render('index', $data);
    }

    public function news()
    {
        echo 'news list';
    }

    public function newsOne($id)
    {
        echo $id;
    }
}