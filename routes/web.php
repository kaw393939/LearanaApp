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

Auth::routes();
Route::get('/', 'CourseController@index')->name('guest');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses/new', 'CourseController@create')->name('courses.create');
Route::post('/courses', 'CourseController@store')->name('courses.store');
Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');
Route::get('/courses/{course}/sections/new', 'SectionController@create')->name('sections.create');
Route::post('/courses/{course}/sections', 'SectionController@store')->name('sections.store');
Route::get('/courses/{course}/sections/{section}', 'SectionController@show')->name('sections.show');
Route::get('/courses/{course}/sections/{section}/register', 'SectionController@register')->name('sections.register');


Route::get('/courses', 'CourseController@index')->name('courses.index');
Route::get('/courses/{course}/edit', 'CourseController@edit')->name('courses.edit');


Route::get('/courses/{course}/sections/{section}/registration/{registration}', 'RegistrationController@show')->name('registration.show');





Route::post('/courses/{course}/sections/{section}/registration', 'RegistrationController@store')->name('registration.store');

Route::get('/courses/{course}/resource/new', 'ResourceController@create')->name('resource.create');
Route::get('/courses/{course}/resource/{resource}', 'ResourceController@show')->name('resource.show');

Route::post('/courses/{course}/resource', 'ResourceController@store')->name('resource.store');


Route::delete('/courses/{course}', 'CourseController@destroy')->name('courses.destroy');



Route::patch('/courses/{course}/', 'CourseController@update')->name('courses.update');
Route::post('/courses/{course}/sections', 'SectionController@store')->name('sections.store');