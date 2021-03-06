<?php

/*
|--------------------------------------------------------------------------
| Load the Start files
|--------------------------------------------------------------------------
|
| http://daylerees.com/breaking-the-mold
|
*/


require_once app_path().'/Nuwbs/routes.php';
require_once app_path().'/Nuwbs/observers.php';
require_once app_path().'/Nuwbs/services.php';
require_once app_path().'/Nuwbs/helpers.php';


/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/


ClassLoader::addDirectories(array(

	app_path().'/database/migrations',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});



//Bugsnag Info
//$app['bugsnag']->setUserId(Auth::user()->username);
$app['bugsnag']->setReleaseStage(App::environment());
$app['bugsnag']->setProjectRoot(app_path());
$app['bugsnag']->setErrorReportingLevel(E_ALL & ~E_NOTICE);
