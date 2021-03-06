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

route::group(['middleware' => ['auth']], function(){

    // Rutas para el proceso de suscripcion
	Route::group(["prefix"=>"user"],function(){
	
		Route::get('/crear','UserController@create')->name('subscriptions.plans');
		Route::get('/buscar','UserController@show')->name('subscriptions.admin');
		Route::post('/token','UserController@processSubscription')->name('subscriptions.process_subscription');
	
	});

});
