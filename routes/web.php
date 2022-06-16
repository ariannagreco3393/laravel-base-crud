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
})->name('home');

//rotte CRUD per comics
Route::get('/comics', 'comicController@index')->name('comics.index');
Route::get('/comics/create', 'comicController@create')->name('comics.create');
Route::post('/comics', 'comicController@store')->name('comics.store');
Route::get('/comics/{comic}', 'comicController@show')->name('comics.show');