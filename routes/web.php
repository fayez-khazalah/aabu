<?php

Route::get('/', function () {
		$data = [
			'name' => 'Eyad',
			'age' => 22
		];
    return view('welcome', compact('data'));
});

Route::get('/pages', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');

//Route::get('/courses/create', 'CoursesController@create');
//Route::post('/courses', 'CoursesController@store');
