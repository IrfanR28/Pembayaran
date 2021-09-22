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
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route Utama
Route::get('/dashboard', 'HomeController@index')->name('dashboard');


// Route CRUD

// Route SPP
Route::get('/dashboard/data-spp', 'SppController@index')->name('spp.index');
Route::get('/dashboard/data-spp/tambah-data-spp', 'SppController@create')->name('spp.create');
Route::post('/dashboard/data-spp', 'SppController@store')->name('spp.store');
Route::get('/dashboard/data-spp/{spp}/edit-data-spp', 'SppController@edit')->name('spp.edit');
Route::put('/dashboard/data-spp/{spp}/edit-data-spp', 'SppController@update')->name('spp.update');
Route::delete('/dashboard/data-spp/{spp}/hapus', 'SppController@destroy')->name('spp.destroy');


// End Route SPP
Route::get('/dashboard/data-siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/dashboard/data-siswa/tambah-data-siswa', 'SiswaController@create')->name('siswa.create');
Route::post('/dashboard/data-siswa', 'SiswaController@store')->name('siswa.store');
Route::get('/dashboard/data-siswa/{siswa}/edit-data-siswa', 'SiswaController@edit')->name('siswa.edit');
Route::put('/dashboard/data-siswa/{siswa}/edit-data-siswa', 'SiswaController@update')->name('siswa.update');
Route::delete('/dashboard/data-spp/{siswa}/hapus', 'SiswaController@destroy')->name('siswa.destroy');

// Route Siswa
Route::get('/dashboard/data-siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/dashboard/data-siswa/tambah-data-siswa', 'SiswaController@create')->name('siswa.create');
Route::post('/dashboard/data-siswa', 'SiswaController@store')->name('siswa.store');
Route::get('/dashboard/data-siswa/{siswa}/edit-data-siswa', 'SiswaController@edit')->name('siswa.edit');
Route::put('/dashboard/data-siswa/{siswa}/edit-data-siswa', 'SiswaController@update')->name('siswa.update');
Route::delete('/dashboard/data-siswa/{siswa}/hapus', 'SiswaController@destroy')->name('siswa.destroy');
Route::get('/dashboard/data-siswa/{siswa}/detail-data-siswa', 'SiswaController@show')->name('siswa.detail');


// End Route Siswa

// 
// Route Petugas
Route::get('/dashboard/data-petugas', 'PetugasController@index')->name('petugas.index');
Route::get('/dashboard/data-petugas/tambah-data-petugas', 'PetugasController@create')->name('petugas.create');
Route::post('/dashboard/data-petugas', 'PetugasController@store')->name('petugas.store');
Route::get('/dashboard/data-petugas/{petugas}/edit-data-petugas', 'PetugasController@edit')->name('petugas.edit');
Route::put('/dashboard/data-petugas/{petugas}/edit-data-petugas', 'PetugasController@update')->name('petugas.update');
Route::delete('/dashboard/data-petugas/{petugas}/hapus', 'PetugasController@destroy')->name('petugas.destroy');
// End Route Petugas


// Route Kelas
Route::get('/dashboard/data-kelas', 'KelasController@index')->name('kelas.index');
Route::get('/dashboard/data-kelas/tambah-data-spp', 'KelasController@create')->name('kelas.create');
Route::post('/dashboard/data-kelas', 'KelasController@store')->name('kelas.store');
Route::get('/dashboard/data-kelas/{kelas}/edit-data-kelas', 'KelasController@edit')->name('kelas.edit');
Route::put('/dashboard/data-kelas/{kelas}/edit-data-kelas', 'KelasController@update')->name('kelas.update');
Route::delete('/dashboard/data-kelas/{kelas}/hapus', 'KelasController@destroy')->name('kelas.destroy');
// End Route Kelas

// Route Kompetensi Keahlian
Route::get('/dashboard/data-kompetensi-keahlian', 'KompetensiKeahlianController@index')->name('KompetensiKeahlian.index');
Route::get('/dashboard/data-kompetensi-keahlian/tambah-data-kompetensi-keahlian', 'KompetensiKeahlianController@create')->name('KompetensiKeahlian.create');
Route::post('/dashboard/data-kompetensi-keahlian', 'KompetensiKeahlianController@store')->name('KompetensiKeahlian.store');
Route::get('/dashboard/data-kompetensi-keahlian/{kompetensi_keahlian}/edit-data-kompetensi-keahlian', 'KompetensiKeahlianController@edit')->name('KompetensiKeahlian.edit');
Route::put('/dashboard/data-kompetensi-keahlian/{kompetensi_keahlian}/edit-data-kompetensi-keahlian', 'KompetensiKeahlianController@update')->name('KompetensiKeahlian.update');
Route::delete('/dashboard/data-kompetensi-keahlian/{kompetensi_keahlian}/hapus', 'KompetensiKeahlianController@destroy')->name('KompetensiKeahlian.destroy');
// End Route Kompetensi Keahlian

// Route Transaksi Pembayaran
Route::get('/dashboard/data-transaksi', 'PembayaranController@index')->name('pembayaran.index');
Route::get('/dashboard/data-transaksi/tambah-data-transaksi', 'PembayaranController@create')->name('pembayaran.create');
Route::post('/dashboard/data-transaksi', 'PembayaranController@store')->name('pembayaran.store');
Route::get('/dashboard/data-transaksi/{pembayaran}/edit-data-transaksi', 'PembayaranController@edit')->name('pembayaran.edit');
Route::put('/dashboard/data-transaksi/{pembayaran}/edit-data-transaksi', 'PembayaranController@update')->name('pembayaran.update');
Route::delete('/dashboard/data-transaksi/{pembayaran}/hapus', 'PembayaranController@destroy')->name('pembayaran.destroy');

// Route Riwayat
Route::get('/dashboard/riwayat', 'RiwayatController@index')->name('riwayat.index');
Route::get('dashboard/riwayat/cetak-pdf', 'RiwayatController@create')->name('riwayat.create');


// Route Akses Siswa
Route::get('/login/siswa', 'SiswaLoginController@siswaLogin');
Route::post('/login/siswa/proses', 'SiswaLoginController@login');
Route::get('/dashboard/siswa/riwayat', 'SiswaLoginController@index');
Route::get('/siswa/logout', 'SiswaLoginController@logout');

// Route Laporan

Route::get('dashboard/laporan', 'LaporanController@index')->name('laporan.index');
Route::get('dashboard/laporan/cetak-pdf', 'LaporanController@create');
