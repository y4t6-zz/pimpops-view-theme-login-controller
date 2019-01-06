<?php
/**
 * List of routes
 */

$this->router->add('home', '/', 'HomeController:index');
$this->router->add('news', '/news', 'HomeController:news');
$this->router->add('news-one', '/news/(id:int)', 'HomeController:newsOne');