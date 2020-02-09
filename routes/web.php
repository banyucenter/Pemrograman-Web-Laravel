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

Route::get('/', function () {
    return view('welcome');
});


//rotes baru pad alaravel
Route::get('halo', function () {
	return "Halo, Selamat datang di matakuliah pemrograman website";
});


//routes dengan template html sendiri
Route::get('profil', function () {
	return view('profil');
});


//routes mengarah pada controller Dosen
Route::get('dosen', 'DosenController@index');

//routes untuk mengambil data nama dari fungsi ambil
Route::get('/mahasiswa/ambil/{nama}', 'MahasiswaController@ambil');


Route::get('/mahasiswa/formulir', 'MahasiswaController@formulir');
Route::post('/formulir/proses', 'MahasiswaController@proses');
