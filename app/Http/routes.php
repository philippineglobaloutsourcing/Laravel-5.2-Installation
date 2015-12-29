<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/




Route::group(['prefix' => 'templates'], function () {
	Route::get('/', function(){
		return view('__adminlte.pages.dashboard');
	});
	Route::get('dashboard', function(){
		return view('__adminlte.pages.dashboard');
	});
	Route::get('dashboard1', function(){
		return view('__adminlte.pages.dashboard1');
	});
	Route::get('widgets', function(){
		return view('__adminlte.pages.widgets');
	});
});

Route::group(['prefix' => 'templates/charts'], function () {
	Route::get('/', function(){
		return view('__adminlte.pages.charts.chartjs');
	});
	Route::get('chartjs', function(){
		return view('__adminlte.pages.charts.chartjs');
	});
});

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
