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

Route::get('/', function () {
    return view('welcome');
});


Route::model('task', App\Task::class);

Route::get('tasks', 'TaskController@index');
Route::get('tasks/{task}', 'TaskController@show');
Route::post('tasks', 'TaskController@store');
Route::put('tasks/{task}', 'TaskController@update');
Route::delete('tasks/{task}', 'TaskController@delete');