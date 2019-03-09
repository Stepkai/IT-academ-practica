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

Route::get('tasks/create', 'TasksController@create')->name('tasks.create'); //дали личное название

Route::post('tasks/store', 'TasksController@store')->name('tasks.store');

Route::get('tasks/edit/{id}', 'TasksController@edit')->name('tasks.edit');

Route::put('tasks/update/{id}', 'TasksController@update')->name('tasks.update');

Route::get('tasks/show/{id}', 'TasksController@show')->name('tasks.show'); //показ отдельной записи

Route::delete('tasks/destroy/{id}', 'TasksController@destroy')->name('tasks.destroy');

// Запустить парсер. Секретный токен нужен для запуска парсера через cron.
Route::get('tasks/parser', 'TasksController@parser')->name('parser.start');

//Route::resource('tasks', 'TasksController'); // метод resource сам определит маршрут