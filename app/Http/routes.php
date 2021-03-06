<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('reportes/{responsable}', 'ReporteController@getReporte');
Route::get('reportes/direccion/funcional/df', 'ReporteController@getReporteDF');
Route::get('reportes/direccion/funcional/de', 'ReporteController@getReporteDE');

Route::get('home', 'HomeController@index');

Route::get('read', 'ReporteController@getreadFile');

Route::get('todosIncidencias', 'ReporteController@getTodosIncidencias');

Route::post('uploadFile', 'ReporteController@postUploadFile');

Route::post('login', 'ReporteController@postLogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
