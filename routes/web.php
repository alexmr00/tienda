<?php

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

Route::get('/novedades', function () {
    return view('novedades');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/administrador', function () {
    return view('admin');
});
