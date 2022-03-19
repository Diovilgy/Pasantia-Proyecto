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

/* Route::get('/empleados', function () {
     return view('/empleados.empleadosform');
}); */

Route::get('/empleados', 'crudcontroller@create'); //Ruta que me devolvera la vista 
Route::post('/guardar', 'crudcontroller@store')->name('store'); //Ruta para almacenar empleados

Route::get('/layouts', function () {
    return view('/layouts.base');
});

Route::resource('varios', 'crudcontroller');

