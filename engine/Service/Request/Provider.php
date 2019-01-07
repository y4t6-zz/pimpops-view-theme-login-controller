<?php
/**
 * Created by PhpStorm.
 * Page: andriipereverziev
 * Date: 2018-12-17
 * Time: 20:10
 */

namespace Engine\Service\Request;

use Engine\Service\AbstractProvider;
use Engine\Core\Request\Request;

class Provider extends AbstractProvider
{
    public $serviceName = 'request';

    public function init()
    {
        $request = new Request();

        $this->di->set($this->serviceName, $request);
    }
}