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

Route::get('home', 'HomeController@index');

#login

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
#register
Route::get('register','RegisterController@index');
Route::post('post_register','RegisterController@postRegister');

#product
Route::get('product','ProductController@index');
Route::get('product/create','ProductController@getcreate');
Route::post('product/create','ProductController@postcreate');
Route::get('product/{id}/edit','ProductController@getEdit');
Route::post('product/{id}/edit','ProductController@postEdit');
Route::get('product/{id}/delete','ProductController@getDelete');
Route::post('product/{id}/delete','ProductController@postDelete');
Route::get('product/data','ProductController@data');

#person
Route::get('person','PersonController@index');
Route::get('person/create','PersonController@getcreate');
Route::post('person/create','PersonController@postcreate');
Route::get('person/{id}/edit','PersonController@getEdit');
Route::post('person/{id}/edit','PersonController@postEdit');
Route::get('person/{id}/delete','PersonController@getDelete');
Route::post('person/{id}/delete','PersonController@postDelete');
Route::get('person/data','PersonController@data');

#book
Route::get('book','BookController@index');
Route::get('book/create','BookController@getcreate');
Route::post('book/create','BookController@postcreate');
Route::get('book/{id}/edit','BookController@getEdit');
Route::post('book/{id}/edit','BookController@postEdit');
Route::get('book/{id}/delete','BookController@getDelete');
Route::post('book/{id}/delete','BookController@postDelete');
Route::get('book/data','BookController@data');

#course
Route::get('course','CourseController@index');
Route::get('course/create','CourseController@getcreate');
Route::post('course/create','CourseController@postcreate');
Route::get('course/{id}/edit','CourseController@getEdit');
Route::post('course/{id}/edit','CourseController@postEdit');
Route::get('course/{id}/delete','CourseController@getDelete');
Route::post('course/{id}/delete','CourseController@postDelete');
Route::get('course/data','CourseController@data');