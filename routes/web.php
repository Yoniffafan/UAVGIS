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

Route::get('/peta', 'Webcontroller@showpeta');

Route::get('/admin', function () {
    return view('login');
});

Route::get('/data', 'Webcontroller@show');

Route::get('/dataadmin', 'Webcontroller@showadmindata');

Route::get('/form', function () {
    return view('form');
});
