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
    return view('index');
});

Route::get('/pa', function () {
    return view('pa');
});

Route::get('/auto', function () {
    return view('auto');
});


Route::get('/cancer', function () {
    return view('cancer');
});