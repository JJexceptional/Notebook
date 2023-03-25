<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\NotebookController@index')->name('notebook.index');
Route::get('/notebook/create', 'App\Http\Controllers\NotebookController@create')->name('notebook.create');

Route::post('/notebook', 'App\Http\Controllers\NotebookController@store')->name('notebook.store');
Route::get('/notebook/{notebook}', 'App\Http\Controllers\NotebookController@show')->name('notebook.show');
Route::get('/notebook/{notebook}/edit', 'App\Http\Controllers\NotebookController@edit')->name('notebook.edit');
Route::patch('/notebook/{notebook}', 'App\Http\Controllers\NotebookController@update')->name('notebook.update');
Route::delete('/notebook/{notebook}', 'App\Http\Controllers\NotebookController@destroy')->name('notebook.delete');



//Route::get('/notebook/update', 'App\Http\Controllers\NotebookController@update');
//Route::get('/notebook/delete', 'App\Http\Controllers\NotebookController@delete');



