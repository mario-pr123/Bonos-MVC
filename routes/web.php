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
    return view('home');
});
Route::resource('usuarios','App\Http\Controllers\UsuariosController');
Route::resource('bonos','App\Http\Controllers\BonosController');
Route::get('/filtrar','App\Http\Controllers\BonosController@filtrar');
Route::post('/filtrarBonos','App\Http\Controllers\BonosController@filtrarBonos');

