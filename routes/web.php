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

/**
 * File Upload Routes
 */
Route::get('/files', 'App\Http\Controllers\FilesController@index')->name('files.index');
Route::get('/files/add', 'App\Http\Controllers\FilesController@create')->name('files.create');
Route::post('/files/add', 'App\Http\Controllers\FilesController@store')->name('files.store');
