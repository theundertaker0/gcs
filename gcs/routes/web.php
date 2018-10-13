<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/','IndexController@index');

Route::get('edituser','AdminUsersController@edit');
Route::post('/storeuser','AdminUsersController@store')->name('storeuser');

Route::get('/changepass','AdminUsersController@editpass')->name('changepass');

Route::post('/updatepass','AdminUsersController@updatepass')->name('updatepass');


///////RUTAS  GENERADAS  PARA EL MODULO DE EMPERSAS/////
Route::get('/enterprises', 'EnterprisesController@index')->name('enterprises');
Route::post('/createenterprises', 'EnterprisesController@create')->name('createenterprises');