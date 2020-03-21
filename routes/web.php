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
Route::get('/redirect/{user}', 'HomeController@redirect')->name('redirect');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/redirect/{provider}', 'Auth\GoogleController@redirect');
 Route::get('/callback/{provider}', 'Auth\GoogleController@callback');

Route::resource('roles', 'RoleController');

Route::resource('etablissements', 'EtablissementController');

Route::resource('users', 'UserController');

Route::resource('classes', 'ClasseController');