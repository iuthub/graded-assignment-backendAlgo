<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'TasksController@getAll')->name('getAll');
    Route::post('/', 'TasksController@postAdd')->name('postAdd');
    Route::post('edit', 'TasksController@postEdit')->name('postEdit');
    Route::get('edit/{id}', 'TasksController@getEdit')->name('getEdit');
    Route::get('delete/{id}', 'TasksController@deleteTask')->name('deleteTask');    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
