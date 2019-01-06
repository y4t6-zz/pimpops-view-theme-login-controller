<?php

namespace Admin\Controller;

class DashboardController extends AdminController
{
    public function index()
    {
        print_r($this->config);
        $this->view->render('dashboard');
    }
}