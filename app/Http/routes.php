<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// /users - Usercontroller@index
// /users/create - Usercontroller@create
// /users/id- Usercontroller@show
// /users - Usercontroller@store POST
Route::resource('users', 'UserController');



// /products -index
// /products/create - Productcontroller@create
Route::resource('products', 'ProductController');





/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/