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

Route::get('provaView', function (){
    return view('provaView');
});

Route::get('/login', 'LoginController@login');

Route::get('/controlPanel', 'ControlPanelController@controlPanel');

Route::get('/controlPanelProva', 'ControlPanelController@controlPanelProva');

Route::get('/panel', 'ControlPanelController@panel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
