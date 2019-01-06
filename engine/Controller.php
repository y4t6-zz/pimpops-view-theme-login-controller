<?php

namespace Engine;

abstract class Controller
{
    protected $di;

    protected $view;

    /**
     * Controller constructor.
     * @param DI\DI $di
     */
    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
        $this->view = $this->di->get('view');
    }
}