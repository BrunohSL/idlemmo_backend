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

/**
 * Routes for resource item
 */
$router->group(['prefix' => 'item'], function () use ($router) {
    $router->get('/index', 'ItemsController@index');
    $router->get('/index/{id}', 'ItemsController@show');
    $router->post('/store', 'ItemsController@store');
    $router->put('/update/{id}', 'ItemsController@update');
    $router->delete('/delete/{id}', 'ItemsController@destroy');
});

/**
 * Routes for resource player
 */
$router->group(['prefix' => 'player'], function () use ($router) {
    $router->get('/index', 'PlayersController@index');
    $router->get('index/{id}', 'PlayersController@show');
    $router->post('/store', 'PlayersController@store');
    $router->put('update/{id}', 'PlayersController@update');
    $router->delete('delete/{id}', 'PlayersController@destroy');
});
