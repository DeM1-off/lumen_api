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

$router->group(['prefix' => 'api/user'], function () use ($router) 
{
   $router->post('register', 'AuthController@register');
   $router->post('sign-in', 'AuthController@login');
   $router->post('recover-password', 'PasswordController@generateResetToken');
   $router->post('reset', 'PasswordController@resetPassword');

   $router->group(['middleware' => 'auth'], function ($router) 
    {

        $router->post('companies', 'CompanyController@createNewCompany'); 
        $router->get('companies', 'CompanyController@getUserCompany'); 
    });
});
