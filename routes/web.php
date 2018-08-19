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

//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/login_old', 'LoginController@login');

    /*** Customers ***/
    Route::resource('customers','CustomerController');
    Route::get('customers/{id}/detail','CustomerController@detail');

    /*** Collaborators ***/
    Route::resource('collaborators','CollaboratorController');
    Route::get('collaborators/{id}/detail','CollaboratorController@detail');

});
