<?php
require  'vendor/autoload.php';
require 'functions.php';
require 'app/Router.php';

$dotenv=Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router();
$router->get('/', 'UserController@index');
$router->get('/products', 'ProductController@show');
$router->get('/products/create', 'ProductController@create');
$router->post('/products/create', 'ProductController@create');
$router->post('/products/delete/{id}', 'ProductController@delete');
$router->get('/products/update/{id}', 'ProductController@showUpdateForm');
$router->post('/products/update/{id}', 'ProductController@update');



// Dispatch the request
$requestedRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

dd($requestedRoute);

// Dispatch the route
$router->dispatch($requestedRoute);


