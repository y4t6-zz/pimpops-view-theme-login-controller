<?php

namespace Engine;

use Engine\DI\DI;

abstract class Controller
{
    protected $di;

    protected $view;

    protected $config;

    public function __construct(DI $di)
    {
        $this->di     = $di;
        $this->view   = $this->di->get('view');
        $this->config = $this->di->get('config');
    }
}