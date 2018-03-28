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

Route::get('/accident', function () {
    return view('insuacc');
});

Route::get('/drive', function () {
    return view('insuauto');
});

Route::get('/act', function () {
    return view('insuprb');
});

Route::get('/health', function () {
    return view('insuhealth');
});

Route::get('/travel', function () {
    return view('insutravel');
});

Route::get('/fire', function () {
    return view('insufire');
});

Route::get('/golf', function () {
    return view('insugolf');
});

Route::get('/bankkok_Fire', function () {
    return view('bangkokInsu_Rakban');
});

Route::get('/sriaryutthaya_drive', function () {
    return view('auto');
});

Route::get('/viriya_accident', function () {
    return view('viriyaInsu_acc');
});