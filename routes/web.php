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

$app->group(['prefix' => 'admin'], function () use ($app) {
    $app->post('login', function ()    {
        return "Test Post Login";
    });

    $app->post('checkToken', function ()    {
        return "Test Post Check Token";
    });

    
});

