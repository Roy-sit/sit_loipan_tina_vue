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


//matches localhost:8888/lumen/public/
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/paintings', 'PaintingController@getAll');
$router->get('/paintings/{id}', 'PaintingController@getOne');
$router->post('/paintings/add', 'PaintingController@save');
$router->post('/paintings/edit/{id}', 'PaintingController@update');
$router->delete('/paintings/delete/{id}', 'PaintingController@delete');

$router->get('/artists', 'ArtistController@getAll');
$router->get('/artists/{id}', 'ArtistController@getOne');
$router->post('/artists/add', 'ArtistController@save');
$router->post('/artists/edit/{id}', 'ArtistController@update');
$router->delete('/artists/delete/{id}', 'ArtistController@delete');















