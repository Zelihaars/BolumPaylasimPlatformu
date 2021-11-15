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
Route::get('OgrenciPaneli','App\Http\Controllers\Back\Kullanici@ogrenci')->name('ogrenci.kullanici');
Route::get('AkademisyenPaneli','App\Http\Controllers\Back\Kullanici@akademi')->name('akademisyen.kullanici');
Route::get('/','App\Http\Controllers\Front\Anasayfa@index')->name('anasayfa');
Route::get('ogrenciGiris','App\Http\Controllers\Back\Auth@loginOgr')->name('ogrenci.login');
Route::get('akademisyenGiris','App\Http\Controllers\Back\Auth@loginAkm')->name('akademisyen.login');
Route::get('sifremiUnuttum','App\Http\Controllers\Back\Sifre@password')->name('sifremi.unuttum');

