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

Route::get('/usuarios','UserController@index');

//usuario/nuevo != usuario/[0-9]+

Route::get('/usuarios/{id}','UserController@show')
//->where('id','[0-9]+');
->where('id','\d+');

Route::get('/usuarios/nuevo','UserController@create');

/*Route::get('/saludo/{name}/{nickname}',function($name,$nickname){
    return "Bienvenido {$name}, tu nickname es {$nickname}";
});*/

//Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');

Route::get('/saludo/{name}/{nickname}','WelcomeUserController@withNick');

Route::get('/saludo/{name}','WelcomeUserController@withOutNick');

Route::get('/usuarios/{id}/edit','UserController@edit')
    ->where('id','\d+');