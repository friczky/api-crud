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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Kontak Route
Route::get('kontak','KontakController@index');
Route::post('kontak','KontakController@store');
Route::get('kontak/{id}','KontakController@show');
Route::put('kontak/{id}','KontakController@update');
Route::delete('kontak/{id}','KontakController@destroy');

// Mahasiswa Routes
Route::get('mahasiswa','MahasiswaController@index');
Route::post('mahasiswa','MahasiswaController@store');
Route::get('mahasiswa/{id}','MahasiswaController@show');
