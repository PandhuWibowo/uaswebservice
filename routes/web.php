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

$router->get('/students', ['uses' => 'StudentController@show']);
$router->get('/students/{id}', ['uses' => 'StudentController@detailshow']);
$router->post('/students', ['uses' => 'StudentController@create']);
$router->put('/students/{id}', ['uses' => 'StudentController@update']);
$router->delete('/students/{id}', ['uses' => 'StudentController@delete']);