<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiresource('artikel', App\Http\Controllers\artikelAPIController::class);
Route::apiresource('kategori_artikel', App\Http\Controllers\kategoriartikelAPIController::class);
Route::apiresource('berita', App\Http\Controllers\BeritaAPIController::class);
Route::apiresource('kategori_berita', App\Http\Controllers\KategoriBeritaAPIController::class);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Soal1
//Tampilkan artikel dengan id =17 dan users_id=160
Route::get('soal1','App\Http\Controllers\BabSatuController@a1');

//Soal2
//Tampilkan artikel dengan id =2 atau id=5
Route::get('soal2','App\Http\Controllers\BabSatuController@a2');

//Soal3
//Tampilkan artikel dengan id =3 dan user dengan nama =Aslijan Metgantara
Route::get('soal3','App\Http\Controllers\BabSatuController@a3');

//Soal4
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id =269
Route::get('soal4','App\Http\Controllers\BabSatuController@a4');

//Soal5
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri dengan nama kategori galeri yang di awali dengan Aut
Route::get('soal5','App\Http\Controllers\BabDuaController@a5');

//Soal6
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga membuat berita
Route::get('soal6','App\Http\Controllers\BabDuaController@a6');

//Soal7
//Tampilkan pengumuman yang dibuat oleh user yang membuat 2 berita atau lebih
Route::get('soal7','App\Http\Controllers\BabDuaController@a7');

