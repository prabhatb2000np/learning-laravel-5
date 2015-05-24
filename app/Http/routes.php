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
//$bar=new Bar(new Baz);
interface BarInterface{}
class Bar implements BarInterface{}
class SecondBar implements BarInterface{}
App::bind('BarInterface','Bar');
//class Baz{}
//class Bar{
// public $baz;
//    public function __construct(Baz $baz) {
//    $this->baz=$baz;
//    }
//}

//App::bind('Bar',function(){
//    dd("fetching");
//    return new Bar(new Baz);
//    
//});

Route::get('foo1','FooController@foo');
Route::get('bar',function(){
    $bar=App::make('BarInterface');
    dd($bar);
});
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
Route::get('foo',['middleware'=>'manager',function(){
    return "This page may only be viewed by managers.";
}]);
Route::get('tags/{tags}','TagController@show');