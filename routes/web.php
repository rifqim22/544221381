<?php

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
    return view('keuangan');
Route::resource('keuangan', 'KeuanganController');
Route::get('/', 'App\Http\Controllers\KeuanganController@index');
Route::get('/create', 'App\Http\Controllers\KeuanganController@create');
Route::post('/store', 'App\Http\Controllers\KeuanganController@store');
Route::get('/edit/{id}', 'App\Http\Controllers\KeuanganController@edit');
Route::post('/update/{id}', 'App\Http\Controllers\KeuanganController@update');
Route::get('/delete/{id}', 'App\Http\Controllers\KeuanganController@delete');
});
