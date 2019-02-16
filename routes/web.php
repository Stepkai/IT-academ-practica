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

Route::get('tasks', 'TasksController@index')->name('tasks.index');

Route::get('tasks/crete', 'TasksController@create')->name('tasks.create'); //дали личное название

Route::post('tasks/store', 'TasksController@store')->name('tasks.store');

Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');

Route::put('tasks/{id}/update', 'TasksController@update')->name('tasks.update');

Route::get('tasks/{id}/show', 'TasksController@show')->name('tasks.show'); //показ отдельной записи

Route::delete('tasks/{id}/destroy', 'TasksController@destroy')->name('tasks.destroy');