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
use App\users;
Route::get('/', function () {
	//Route::get('index','Controller@index');
    return view('layouts.index');
});
Route::group(['prefix'=>'users'],function(){
	Route::get('list','UsersController@getList');
	Route::get('edit','UsersController@getEdit');
	Route::get('add','UsersController@getAdd');
});
//Route::get('vidu','ForumController@contact');
Route::group(['prefix'=>'comments'],function(){
	Route::get('list','CommentsController@getList');
	Route::get('edit','CommnetsController@getEdit');
	Route::get('add','CommentsController@getAdd');
});