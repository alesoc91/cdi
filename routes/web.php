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

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/login_old', 'LoginController@login');

    /*** Appointments ***/
    Route::resource('appointments','AppointmentController');
    Route::get('appointments/{id}/detail','AppointmentController@detail');

    /*** Customers ***/
    Route::resource('customers','CustomerController');
    Route::get('customers/{id}/detail','CustomerController@detail');

    /*** Collaborators ***/
    Route::resource('collaborators','CollaboratorController');
    Route::get('collaborators/{id}/detail','CollaboratorController@detail');

    /*** FidelityCards ***/
    Route::resource('fidelity_cards','FidelityCardController');
    Route::get('fidelity_card/{id}/detail','FidelityCardController@detail');

    /*** Products ***/
    Route::resource('products','ProductController');
    Route::get('products/{id}/detail','ProductController@detail');

    /*** Promotions ***/
    Route::resource('promotions','PromotionController');
    Route::get('promotions/{id}/detail','PromotionController@detail');

    /*** Services ***/
    Route::resource('services','ServiceController');
    Route::get('services/{id}/detail','ServiceController@detail');

    /*** Suppliers ***/
    Route::resource('suppliers','SupplierController');
    Route::get('suppliers/{id}/detail','SupplierController@detail');








});
