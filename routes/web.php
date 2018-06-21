<?php

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    $api->get('students',  'StudentController@show');

    $api->get('students/{id}',  'StudentController@showDetails');

    $api->post('students',  'StudentController@store');

    $api->delete('students/{id}',  'StudentController@delete');

    $api->put('students/{id}',  'StudentController@update');
});
