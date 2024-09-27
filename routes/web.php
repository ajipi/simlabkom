<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/master-barang', function () {return view('master-barang');});
Route::get('/master-jenis', function () {return view('master-jenis');});
Route::get('/master-kategori', function () {return view('master-kategori');});
Route::get('/master-ruang', function () {return view('master-ruang');});
Route::get('/master-users', function () {return view('master-users');});
Route::get('/master-anggota', function () {return view('master-anggota');});
Route::get('/master-supplier', function () {return view('master-supplier');});
Route::get('/master-rak', function () {return view('master-rak');});
Route::get('/master-merek', function () {return view('master-merek');});
Route::get('/trx-peminjaman', function () {return view('trx-peminjaman');});
Route::get('/test', function () {return view('test');});
