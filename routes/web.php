<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/jadwal/tambah', 'JadwalController@tambahJadwal')->name('jadwal.tambah');
Route::post('/jadwal/tambah', 'JadwalController@simpanJadwal')->name('jadwal.simpan');
Route::get('/jadwal', 'JadwalController@readJadwal')->name('jadwal.index');
Route::get('/jadwal/{id}/edit', 'JadwalController@editJadwal')->name('jadwal.edit');
Route::patch('/jadwal/{id}/edit', 'JadwalController@updateJadwal')->name('jadwal.update');
Route::delete('/jadwal/{id}/hapus', 'JadwalController@hapusJadwal')->name('jadwal.hapus');
