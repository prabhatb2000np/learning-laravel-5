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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('contact','ContactController@index');
Route::get('about','AboutController@index');
Route::get('foo',function(){
 return "Bar";   
});
/*Route::get('articles','ArticleController@index');
Route::get('articles/create','ArticleController@create');
Route::get('articles/{id}','ArticleController@show');
Route::post('articles','ArticleController@store');
Route::get('articles/{id}/edit','ArticleController@edit');*/
Route::resource('articles','ArticleController');