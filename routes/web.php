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
    return 'Welcome to Mainapi';
});

$router->post('island', ['uses' => 'AreaController@island', 'as' => 'island']);
$router->post('province', ['uses' => 'AreaController@province', 'as' => 'province']);
$router->post('regency', ['uses' => 'AreaController@regency', 'as' => 'regency']);
$router->post('license_plate', ['uses' => 'MainController@licensePlate', 'as' => 'license_plate']);
