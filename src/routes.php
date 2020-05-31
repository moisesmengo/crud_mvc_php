<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'EncomendasController@add');
$router->post('/novo', 'EncomendasController@addEncomenda');