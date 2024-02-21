<?php


use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    //$routes->connect('/', ['controller' => 'categories', 'action' => 'index']);
    //$routes->connect('/', ['controller' => 'categories', 'action' => 'index']);

    $routes->connect('/', ['controller' => 'Contents', 'action' => 'site']);
    //$routes->connect('/admin', ['controller' => 'kits', 'action' => 'index']);
    $routes->connect('/admin', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/duvidas-comuns-sobre-energia-solar', ['controller' => 'Asks', 'action' => 'show']);
    $routes->connect('/ver/:id', ['controller' => 'Slides',  'action'    =>  'show'] )->setPass(['id']);
    $routes->connect('/historia/:slug', ['controller' => 'Biographies',  'action'    =>  'show'] )->setPass(['slug']);

    $routes->connect('/kits-solares', ['controller' => 'Categories', 'action' => 'show']);
    
    $routes->connect('/kit/:slug', ['controller' => 'Kits',  'action'    =>  'show'] )->setPass(['slug']);
    $routes->connect('/kit-solar/:slug', ['controller' => 'Categories',  'action'    =>  'details'] )->setPass(['slug']);
    
    $routes->connect('/noticias/:slug', ['controller' => 'Contents',  'action'    =>  'show'] )->setPass(['slug']);
    $routes->connect('/noticias',           ['controller' => 'Contents', 'action' => 'listanoticias']);
    
    $routes->connect('/calculadora-solar',       ['controller' => 'Calculators', 'action' => 'calcular']);
    
    $routes->connect('/filiais',            ['controller' => 'Branches', 'action' => 'show']);
	$routes->connect('/trabalhe-conosco',   ['controller' => 'Documents', 'action' => 'add']);





    //$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


    $routes->fallbacks(DashedRoute::class);
});


//Plugin::routes();
