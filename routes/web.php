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
Route::resource('/laboratorios', 'App\Http\Controllers\LaboratorioController');
Route::resource('/usuario', 'App\Http\Controllers\UsuarioController');
Route::resource('/producto', 'App\Http\Controllers\ProductoController');
Route::resource('/ventas', 'App\Http\Controllers\VentasController');
