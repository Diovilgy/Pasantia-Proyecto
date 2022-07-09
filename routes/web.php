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

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\empleadosControllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list','empleadosControllers@list'); //Listado de empleados
Route::get('/empleados', 'empleadosControllers@create'); //Formulario de empleados
Route::post('/guardar', 'empleadosControllers@store')->name('store'); //Guardar empleados


/* 
Route::get('/layouts', function () {
    return view('/layouts.base');
});

Route::get('/prueba', function () {
    return view('/empleados.prueba');
}); */


