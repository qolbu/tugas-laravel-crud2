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

Route::get('/', 'PertanyaanController@index');


Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/show/{id}', 'PertanyaanController@show');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::post('/update', 'PertanyaanController@update');
Route::post('/jawaban', 'JawabanController@store');
Route::get('/edit/{id}', 'PertanyaanController@edit');
Route::get('/delete/{id}', 'PertanyaanController@delete');


