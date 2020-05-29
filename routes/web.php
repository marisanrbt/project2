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

//Route::get('/', function () {
  //  return view('navbar');
//});

//Route::get('/pengembalian', function () {
//    return view('pengembalian');
//});

//Route::get('/peminjaman', function () {
//    return view('peminjaman');
//});

Route::get('/', 'PagesController@beranda');

Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/peminjaman/create', 'PeminjamanController@create');
Route::post('/peminjaman', 'PeminjamanController@store');

Route::get('/pengembalian', 'PengembalianController@index');
Route::get('/pengembalian/{pngmbln}', 'PengembalianController@show');