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