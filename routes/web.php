<?php

use App\Http\Controllers\MatakuliahControllerNurhidayati;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('katalog', 'App\Http\Controllers\KatalogController@index');
Route::get('katalog/tambah', 'App\Http\Controllers\KatalogController@tambah');
Route::post('katalog/tambah_proses', 'App\Http\Controllers\KatalogController@tambah_proses');
Route::get('katalog/edit/{id}', 'App\Http\Controllers\KatalogController@edit');
Route::post('katalog/edit_proses', 'App\Http\Controllers\KatalogController@edit_proses');
Route::get('katalog/delete/{id}', 'App\Http\Controllers\KatalogController@delete');

Route::get('peminjam', 'App\Http\Controllers\PeminjamController@index');
Route::get('peminjam/tambah', 'App\Http\Controllers\PeminjamController@tambah');
Route::post('peminjam/tambah_proses', 'App\Http\Controllers\PeminjamController@tambah_proses');
Route::get('peminjam/edit/{id}', 'App\Http\Controllers\PeminjamController@edit');
Route::post('peminjam/edit_proses', 'App\Http\Controllers\PeminjamController@edit_proses');
Route::get('peminjam/delete/{id}', 'App\Http\Controllers\PeminjamController@delete');

//route nurhidayati
Route::get('/matakuliah', [MatakuliahControllerNurhidayati::class,'index'])->name('matakuliah');
Route::get('/tambah_matkul', [MatakuliahControllerNurhidayati::class,'create'])->name('tambah_matkul');
Route::PUT('/simpan_matkul', [MatakuliahControllerNurhidayati::class,'store'])->name('simpan_matkul');
Route::get('/edit_matkul/{matakuliah}', [MatakuliahControllerNurhidayati::class,'edit'])->name('edit_matkul');
Route::PATCH('/update_matkul', [MatakuliahControllerNurhidayati::class,'update'])->name('update_matkul');
Route::get('/delete_matkul/{matakuliah}', [MatakuliahControllerNurhidayati::class,'destroy'])->name('delete_matkul');