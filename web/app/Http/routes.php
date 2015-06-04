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

Route::get('/','PagesController@home');
Route::get('search','PagesController@search');
Route::get('login','PagesController@login');
Route::get('register','PagesController@register');
Route::get('upload','PagesController@upload');
Route::get('edit','PagesController@edit');
Route::get('profile','PagesController@profile');
Route::get('show','PagesController@show');
Route::get('admin','AdminPanelController@showDashboard');
Route::get('admin/dienste','AdminPanelController@showDienste');
Route::get('admin/users','AdminPanelController@showUsers');
Route::get('admin/backup','AdminPanelController@showBackup');
Route::get('admin/admins','AdminPanelController@showAdmins');
Route::get('admin/test','AdminPanelController@showTest');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
