<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/users', 'UsuarioController@index')->name('users');
Route::get('/permisos', 'permisosController@index')->name('permisos');
Route::get('/permisos/create', 'permisosController@create')->name('permisos.create');

Route::post('/permisos/store', 'permisosController@store')->name('permisos.store');

Route::get('/users/create', 'UsuarioController@create')->name('users.create');

Route::post('/users/store', 'UsuarioController@store')->name('users.store');
Route::get('/permisos/edit/{per_id}', 'permisosController@edit')->name('permisos.edit');
Route::get('/users/edit/{usu_id}', 'UsuarioController@edit')->name('users.edit');
Route::post('/permisos/update{per_id}', 'permisosController@update')->name('permisos.update');
Route::post('/users/update{usu_id}', 'UsuarioController@update')->name('users.update');
Route::post('/permisos/destroy{per_id}', 'permisosController@destroy')->name('permisos.destroy');
Route::post('/users/destroy{usu_id}', 'UsuarioController@destroy')->name('users.destroy');
//tipos

Route::get('/tipos', 'TiposController@index')->name('tipos');
Route::get('/tipos/create', 'TiposController@create')->name('tipos.create');
Route::post('/tipos/store', 'TiposController@store')->name('tipos.store');
Route::get('/tipos/edit/{tip_id}', 'TiposController@edit')->name('tipos.edit');
Route::post('/tipos/update{tip_id}', 'TiposController@update')->name('tipos.update');
Route::post('/tipos/destroy{tip_id}', 'TiposController@destroy')->name('tipos.destroy');

///movimientos
Route::get('/movimientos', 'MovimientosController@index')->name('movimientos');
Route::get('/movimientos/create', 'MovimientosController@create')->name('movimientos.create');
Route::post('/movimientos/store', 'MovimientosController@store')->name('movimientos.store');
Route::get('/movimientos/edit/{mov_id}', 'MovimientosController@edit')->name('movimientos.edit');
Route::post('/movimientos/update{mov_id}', 'MovimientosController@update')->name('movimientos.update');
Route::post('/movimientos/destroy{mov_id}', 'MovimientosController@destroy')->name('movimientos.destroy');
Route::post('/movimientos/search','MovimientosController@index')->name('movimientos.search');




