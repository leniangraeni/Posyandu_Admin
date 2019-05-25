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

Route::get('/ibu/tambah', 'IbuController@tambahDataIbu')->name('ibu.tambah');
Route::post('/ibu/tambah', 'IbuController@simpanDataIbu')->name('ibu.simpan');
Route::get('/ibu', 'IbuController@readDataIbu')->name('ibu.index');
Route::get('/ibu/{id}', 'IbuController@detailDataIbu')->name('ibu.detail');
Route::get('/ibu/{id}/edit', 'IbuController@editDataIbu')->name('ibu.edit');
Route::patch('/ibu/{id}/edit', 'IbuController@updateDataIbu')->name('ibu.update');
Route::delete('/ibu/{id}/hapus', 'IbuController@hapusDataIbu')->name('ibu.hapus');

Route::get('/anak/tambah/{ibu}', 'AnakController@tambahDataAnak')->name('anak.tambah');
Route::post('/anak/tambah/{ibu}', 'AnakController@simpanDataAnak')->name('anak.simpan');
Route::get('/anak/{ibu}', 'AnakController@readDataAnak')->name('anak.index');
Route::get('/anak/detail/{id}', 'AnakController@detailDataAnak')->name('anak.detail');
Route::get('/anak/{id}/edit', 'AnakController@editDataAnak')->name('anak.edit');
Route::patch('/anak/{id}/edit', 'AnakController@updateDataAnak')->name('anak.update');
Route::delete('/anak/{id}/hapus', 'AnakController@hapusDataAnak')->name('anak.hapus');

Route::get('/pemeriksaan_anak/tambah/{anak}', 'DataPemeriksaanAnakController@tambahPemeriksaanAnak')->name('pemeriksaan_anak.tambah');
Route::post('/pemeriksaan_anak/{anak}', 'DataPemeriksaanAnakController@simpanPemeriksaanAnak')->name('pemeriksaan_anak.simpan');
Route::get('/pemeriksaan_anak', 'DataPemeriksaanAnakController@readPemeriksaanAnak')->name('pemeriksaan_anak.index');
Route::get('/pemeriksaan_anak/{id}', 'DataPemeriksaanAnakController@detailPemeriksaanAnak')->name('pemeriksaan_anak.detail');
Route::get('/pemeriksaan_anak/{id}/edit', 'DataPemeriksaanAnakController@editPemeriksaanAnak')->name('pemeriksaan_anak.edit');
Route::patch('/pemeriksaan_anak/{id}/edit', 'DataPemeriksaanAnakController@updatePemeriksaanAnak')->name('pemeriksaan_anak.update');
Route::delete('/pemeriksaan_anak/{id}/hapus', 'DataPemeriksaanAnakController@hapusPemeriksaanAnak')->name('pemeriksaan_anak.hapus');

Route::get('/pemeriksaan_ibu/tambah/{ibu}', 'DataPemeriksaanIbuController@tambahPemeriksaanIbu')->name('pemeriksaan_ibu.tambah');
Route::post('/pemeriksaan_ibu/{ibu}', 'DataPemeriksaanIbuController@simpanPemeriksaanIbu')->name('pemeriksaan_ibu.simpan');
Route::get('/pemeriksaan_ibu', 'DataPemeriksaanIbuController@readPemeriksaanIbu')->name('pemeriksaan_ibu.index');
Route::get('/pemeriksaan_ibu/{id}', 'DataPemeriksaanIbuController@detailPemeriksaanIbu')->name('pemeriksaan_ibu.detail');
Route::get('/pemeriksaan_ibu/{id}/edit', 'DataPemeriksaanIbuController@editPemeriksaanIbu')->name('pemeriksaan_ibu.edit');
Route::patch('/pemeriksaan_ibu/{id}/edit', 'DataPemeriksaanIbuController@updatePemeriksaanIbu')->name('pemeriksaan_ibu.update');
Route::delete('/pemeriksaan_ibu/{id}/hapus', 'DataPemeriksaanIbuController@hapusPemeriksaanIbu')->name('pemeriksaan_ibu.hapus');