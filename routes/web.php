<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::resource('lib','LibController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function() {
    return "Hello Laravel 5.3";
});

// Required Parameters
Route::get('blog/{id}', function($id) {
    return "Welcome to Blog ID : " . $id;
});

// Optional Parameters
Route::get('profile/{id?}', function($id=null) {
    return "Welcome to Profile ID : " . $id;
});

Route::get('form', 'Auth\LoginController@form');
Route::get('movieview','MovieController@view');
Route::get('radio','RadioController@index');
Route::get('movie','MovieController@index');
Route::get('song','Music\SongController@index');
Route::get('songplay','Music\SongController@play');
Route::get('band','Music\SongController@band');
Route::get('show','Music\SongController@show');

// Regular Expression
Route::get('book/{name}', function($name) {
    return "Welcome to Book Name : " . $name;
})->where('name','[A-Za-z]+');

Route::match(['get','post'], 'bill', function() {
    if(Request::isMethod('get')){
        return 'This is get method';
    }
    if(Request::isMethod('post')){
        return 'This is post method';
    }
});

Route::any('poll','Auth\LoginController@poll');

Route::resource('code','CodeController');
