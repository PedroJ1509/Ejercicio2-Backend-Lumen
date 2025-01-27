<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('hola',function () use ($router) {
    return "Hola Mundo";
});

$router->get('/unidad', 'UnidadController@getAllUnidad');
$router->get('/unidad/{id}', 'UnidadController@getUnidad');


$router->get('/articulo', 'ArticuloController@getAllArticulo');
$router->get('/articulo/{id}', 'ArticuloController@getArticulo');


$router->get('/usuario', 'UsuarioController@getAllUsuario');
$router->get('/usuario/{user}', 'UsuarioController@getUsuario');
