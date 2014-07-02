<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



//Route::get('/', 'HomeController@showWelcome');
Route::get('/', function(){
	return Redirect::to('coming-soon');
});

Route::get('/home', function(){
	return View::make('layouts.base');
});

Route::get('/coming-soon', function(){
	return View::make('layouts.splash');
});

Route::get('/ev', function()
{
    var_dump(App::environment());
    var_dump(Config::get('database.connections.mysql'));
    var_dump(Config::get('queue'));
});