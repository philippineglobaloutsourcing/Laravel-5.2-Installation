<?php

/**
 * @author Christopher John Cubos
 * @package routes
 */


Route::get('dashboard', function(){
	return view('__adminlte.demos.dashboard');
})->middleware('auth');

Route::group(['middleware' => 'auth', 'prefix' => 'templates'], function () {
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
	Route::get('calendar', function(){
		return view('__adminlte.demos.calendar');
	});
	Route::get('documentation', function(){
		$side_menu="demo_documentation";
		return view('__adminlte.demos.documentation', compact('side_menu'));
	});
});

Route::group(['middleware' => 'auth', 'prefix' => 'templates/charts'], function () {
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

Route::group(['middleware' => 'auth', 'prefix' => 'templates/ui'], function () {
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


Route::group(['middleware' => 'auth', 'prefix' => 'templates/forms'], function () {
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

Route::group(['middleware' => 'auth', 'prefix' => 'templates/tables'], function () {
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

Route::group(['middleware' => 'auth', 'prefix' => 'templates/mailbox'], function () {
	Route::get('/', function(){
		return view('__adminlte.demos.mailbox.mailbox');
	});
	Route::get('mailbox', function(){
		return view('__adminlte.demos.mailbox.mailbox');
	});
	Route::get('compose', function(){
		return view('__adminlte.demos.mailbox.compose');
	});
});

Route::group(['middleware' => 'auth', 'prefix' => 'templates/examples'], function () {
	Route::get('/', function(){
		return view('__adminlte.demos.examples.invoice');
	});
	Route::get('invoice', function(){
		return view('__adminlte.demos.examples.invoice');
	});
	Route::get('invoice/print', function(){
		return view('__adminlte.demos.raw.invoice_print');
	});
	Route::get('profile', function(){
		return view('__adminlte.demos.examples.profile');
	});
	Route::get('404', function(){
		return view('__adminlte.demos.examples.404');
	});
	Route::get('500', function(){
		return view('__adminlte.demos.examples.500');
	});
	Route::get('blank', function(){
		return view('__adminlte.demos.examples.blank');
	});
	Route::get('pace', function(){
		return view('__adminlte.demos.examples.pace');
	});
	Route::get('login', function(){
		return view('__adminlte.demos.raw.login');
	});
	Route::get('register', function(){
		return view('__adminlte.demos.raw.register');
	});
});



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

	Route::get('/', function(){
		Route::auth();
		return view('welcome');
	});


});
