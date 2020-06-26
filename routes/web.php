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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// restful api for notepad app
Route::get('/notes', 'NotesController@index'); // read a list of notes
Route::post('/notes', 'NotesController@store');
Route::get('/notes/create', 'NotesController@create');
Route::get('/notes/{note}', 'NotesController@show'); // read a single note
Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::put('/notes/{note}', 'NotesController@update');
Route::delete('/notes/{note}', 'NotesController@destroy');
