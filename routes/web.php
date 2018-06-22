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
    return view('joel/index');
});

Route::resource('student', 'StudentController');

Route::resource('fees', 'FeesController');

Route::get('/fees',function(){
	return view ('joel/fees');
});

Route::get('/student',function(){
	return view ('joel/student');
});

Route::post('/insert','StudentController@store');

Route::post('/pay','FeesController@store');



Route::get('/search',function(){
	return view('joel.search');
});

Route::post('/searchrecord','FeesController@search');
Route::get('/viewall','FeesController@DisplayAll');
