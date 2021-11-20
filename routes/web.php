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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/surat_keluar/download/{id}', [App\Http\Controllers\SuratKeluar::class, 'download']);
Route::resource('surat_keluar', \App\Http\Controllers\SuratKeluar::class);
Route::get('/surat_masuk/download/{id}', [App\Http\Controllers\SuratMasuk::class, 'download']);
Route::resource('surat_masuk', App\Http\Controllers\SuratMasuk::class);
Route::get('/pegawai', [App\Http\Controllers\Pegawai::class, 'index'])->name('pegawai');
Route::get('/kategori', [App\Http\Controllers\Kategori::class, 'index'])->name('kategori');

Route::post('/laporan/tampilkan-laporan-masuk', [App\Http\Controllers\Laporan::class, 'tampilkanLaporanMasuk']);
Route::post('/laporan/tampilkan-laporan-keluar', [App\Http\Controllers\Laporan::class, 'tampilkanLaporanKeluar']);
Route::resource('laporan', App\Http\Controllers\Laporan::class);
