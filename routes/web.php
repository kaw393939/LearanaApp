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

Route::get('/', 'CourseController@index')->name('guest');
Auth::routes();
Route::get('/courses/new', 'CourseController@create')->name('courses.create');
Route::patch('/courses/{course}/', 'CourseController@update')->name('courses.update');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses', 'CourseController@index')->name('courses.index');
Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');
Route::get('/courses/{course}/edit', 'CourseController@edit')->name('courses.edit');
Route::post('/courses', 'CourseController@store')->name('courses.store');

Route::post('/courses/{course}/sections/registration', 'RegistrationController@store')->name('registration.store');
Route::post('/courses/{course}/section', 'SectionController@store')->name('section.store');
Route::post('/courses/{course}/resource', 'ResourceController@store')->name('resource.store');

Route::delete('/courses/{course}', 'CourseController@destroy')->name('courses.destroy');

