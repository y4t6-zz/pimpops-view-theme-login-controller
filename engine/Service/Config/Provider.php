<?php
/**
 * Created by PhpStorm.
 * User: andriipereverziev
 * Date: 2018-12-17
 * Time: 20:10
 */

namespace Engine\Service\Config;

use Engine\Service\AbstractProvider;
use Engine\Core\Config\Config;

class Provider extends AbstractProvider
{
    public $serviceName = 'config';

    public function init()
    {
        $config['main'] = Config::file('main');
        $config['database'] = Config::file('database');
        $this->di->set($this->serviceName, $config);
    }
}