<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//API
Route::group(['prefix' => 'api'], function(){

	Route::post('/class', 'ApiController@saveClass')->name('api.class.save');
	Route::get('/getClass', 'ApiController@getClass')->name('api.class.get');

});

//STUDENT
Route::group(['prefix' => 'student'], function(){

	Route::get('/','StudentController@index')->name('student.index');	

});

//CLASS
Route::group(['prefix' => 'class'], function(){

	Route::get('/', 'ClassController@index')->name('class.index');

});