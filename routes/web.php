<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Creation d'une route
// Route::get('user/{id}', function ($id) {
//   return 'User : ' . $id;
// });

// 192.168.33.10/id12


//
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'AcceuilController@index');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('contact', 'ContactController@index');
Route::get('magasin', 'MagasinController@index');
Route::get('panier', 'PanierController@index');
