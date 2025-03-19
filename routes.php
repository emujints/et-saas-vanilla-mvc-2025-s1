<?php

use Framework\Routing\Router;

$router = new Router();

$router->get('/home', 'HomeController@index');
$router->post('/login', 'AuthController@login');
$router->put('/user/{id}', 'UserController@update');
$router->delete('/user/{id}', 'UserController@delete');
