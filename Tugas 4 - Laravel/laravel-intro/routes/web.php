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

Route::get('/', 'IndexxController@home');

Route::get('/form', 'FormController@biodata');

Route::post('/kirim', 'FormController@kirim');

Route::get('/data-table', function(){
    return view('table.data-table');
});

Route::get('/table', function(){
    return view('table.table');
});

//CRUD cast
//Menampilkan data pada table cast
Route::get('/cast','CastController@index');
//Form tambah cast
Route::get('/cast/create','CastController@create');
//Insert data baru ke database
Route::post('/cast','CastController@store');
//Menampilkan detail data
Route::get('/cast/{cast_id}','CastController@show');
//Edit data
Route::get('/cast/{cast_id}/edit','CastController@edit');
//FUNGSI UPDATE ID
Route::put('/cast/{cast_id}','CastController@update');
//Delete
Route::delete('/cast/{cast_id}','CastController@destroy');