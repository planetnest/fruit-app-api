<?php

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

// The Routes are versioned as v1

$router->group(['prefix'=>'api/v1'], function() use($router){
$router->get('/fruits', 'FruitController@index');
$router->post('/fruit', 'FruitController@create');
$router->get('/fruit/{id}', 'FruitController@show');
$router->put('/fruit/{id}', 'FruitController@update');
$router->delete('/fruit/{id}', 'FruitController@destroy');
});

