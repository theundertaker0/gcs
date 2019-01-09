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

/////////RUTAS GENERADAS PARA EL MODULO USUARIOS//////
Route::get('edituser','AdminUsersController@edit');
Route::post('/storeuser','AdminUsersController@store')->name('storeuser');
Route::get('/changepass','AdminUsersController@editpass')->name('changepass');
Route::post('/updatepass','AdminUsersController@updatepass')->name('updatepass');

///////Rutas para módulo de Facturas///////
Route::resource('bill','BillController');
Route::get('bill/misfacturas','BillController@getBills')->name('bill.misfacturas');
route::get('facturas','BillController@facturas');
Route::get('billproducts/{id}','BillController@billproducts')->name('bill.billproducts');
Route::get(' productsbybill/{id}','BillController@productsbybill')->name('bill.productsbybill');
Route::get(' addproduct/{id}','BillController@addproduct')->name('bill.addproduct');

///////RUTAS  GENERADAS  PARA EL MODULO DE EMPRESAS/////
Route::get('/enterprises', 'EnterprisesController@index')->name('enterprises');
Route::post('/createenterprises', 'EnterprisesController@create')->name('createenterprises');
Route::post('/editenterprises/', 'EnterprisesController@edit')->name('editenterprises');
Route::post('/deleteenterprises/', 'EnterprisesController@destroy')->name('deleteenterprises');
Route::get('/scoreenterprises', 'EnterprisesController@score')->name('scoreenterprises');

///////RUTAS GENERADAS PARA EL MÓDULO DE PRODUCTOS/////
Route::resource('product','ProductController');
Route::get('productos','ProductController@productos');
