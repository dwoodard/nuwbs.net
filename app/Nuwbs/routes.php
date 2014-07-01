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

Route::get('/test', function(){
	$arr = Illuminate\Support\Collection::make(json_decode('{"array":[1,2,3],"boolean":true,"null":null,"number":123,"object":{"a":"b","c":"d","e":"f"},"string":"Hello World"}'));
	$arr->push(['name' => 'Doggy', 'age' => 10]);
	return $arr;
});


//Route::get('/', 'HomeController@showWelcome');
Route::get('/', function(){
   return View::make('layouts.splash');

});

Route::get('/ev', function()
{
    var_dump(App::environment());
    var_dump(Config::get('database.connections.mysql'));
    var_dump(Config::get('queue'));
});