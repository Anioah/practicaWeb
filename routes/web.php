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

//Route::get('/', function () {
//    return "Hola Mundo";
//});

/*Route::match(["GET","POST"],'/{nombre}/{sexo?}/{edad?}','Prueba\PruebaController@index')
->where(['nombre'=>'[a-zA-Z]+','sexo'=>'[a-zA-Z]+', 'edad' =>'[1-9]+']);*/

Route::post('info','Prueba\PruebaController@info');
Route::get('formulario','Prueba\PruebaController@formulario');