<?php
use core\Router;
use src\controllers\EncomendasController;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'EncomendasController@add');
$router->post('/novo', 'EncomendasController@addEncomenda');

$router->get('/encomenda/{id}/editar', 'EncomendasController@edit');
$router->get('/encomenda/{id}/excluir', 'EncomendasController@del');