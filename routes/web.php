<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','TaskController@index');

Route::get('task/{id}','TaskController@show');

Route::post('storeTOTaskController','TaskController@store')->name('store');

Route::delete('delete/{id}','Taskcontroller@destroy');


Route::put('edit/{id}','Taskcontroller@ShowUpdateTask');

Route::patch('update/{id}','TaskController@Update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
