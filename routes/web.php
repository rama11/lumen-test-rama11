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

$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->post('login', function ()    {
        return "Test Post Login";
    });

    $router->post('checkToken', function ()    {
        return "Test Post Check Token";
    });

    $router->post('refreshToken', function ()    {
        return "Test Post Refresh Token";
    });



    $router->get('user', function ()    {
        return "Get User (Admin)";
    });

    $router->group(['prefix' => 'user'], function () use ($router) {
        $router->get('detail', function ()    {
            return "Get User Detail (Admin)";
        });

        $router->get('logLogin', function ()    {
            return "Get User Log Login (Admin)";
        });
    });
});

