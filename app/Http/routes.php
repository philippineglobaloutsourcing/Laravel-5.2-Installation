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
		return view('__adminlte.demos.dashboard');
	});
	Route::get('dashboard', function(){
		return view('__adminlte.demos.dashboard');
	});
	Route::get('dashboard1', function(){
		return view('__adminlte.demos.dashboard1');
	});
	Route::get('widgets', function(){
		return view('__adminlte.demos.widgets');
	});
});

Route::group(['prefix' => 'templates/charts'], function () {
	Route::get('/', function(){
		return view('__adminlte.demos.charts.chartjs');
	});
	Route::get('chartjs', function(){
		return view('__adminlte.demos.charts.chartjs');
	});
	Route::get('morris', function(){
		return view('__adminlte.demos.charts.morris');
	});
	Route::get('flot', function(){
		return view('__adminlte.demos.charts.flot');
	});
	Route::get('inline', function(){
		return view('__adminlte.demos.charts.inline');
	});
});

Route::group(['prefix' => 'templates/ui'], function () {
	Route::get('/', function(){
		return view('__adminlte.demos.ui.general');
	});
	Route::get('general', function(){
		return view('__adminlte.demos.ui.general');
	});
	Route::get('icons', function(){
		return view('__adminlte.demos.ui.icons');
	});
	Route::get('icons/{icon}', function($icon){
		return view('__adminlte.demos.ui.icon', compact('icon'));
	});
	Route::get('buttons', function(){
		return view('__adminlte.demos.ui.buttons');
	});
	Route::get('sliders', function(){
		return view('__adminlte.demos.ui.sliders');
	});
	Route::get('timeline', function(){
		return view('__adminlte.demos.ui.timeline');
	});
	Route::get('modals', function(){
		return view('__adminlte.demos.ui.modals');
	});
});


Route::group(['prefix' => 'templates/forms'], function () {
	Route::get('/', function(){
		return view('__adminlte.demos.forms.general');
	});
	Route::get('general', function(){
		return view('__adminlte.demos.forms.general');
	});
	Route::get('advanced', function(){
		return view('__adminlte.demos.forms.advanced');
	});
	Route::get('editors', function(){
		return view('__adminlte.demos.forms.editors');
	});
});

Route::group(['prefix' => 'templates/tables'], function () {
	Route::get('/', function(){
		return view('__adminlte.demos.tables.simple');
	});
	Route::get('simple', function(){
		return view('__adminlte.demos.tables.simple');
	});
	Route::get('data', function(){
		return view('__adminlte.demos.tables.data');
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
