<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Router;

$routes = new Router();

$routes->get('/', function(){
  echo 'Home Page';
});

$routes->get('/about', function(){
  echo 'About Page';
});

$routes->run();


