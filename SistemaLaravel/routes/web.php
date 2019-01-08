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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deletecli/{name}','clienteController@delete');
Route::get('/updatecli/{id}','clienteController@atualiza');
Route::post('/update','clienteController@update')->name('update');
Route::group(['prefix'=>'clientes'], function(){
    Route::get('/','clienteController@index');
    Route::post('/','clienteController@add');
});

