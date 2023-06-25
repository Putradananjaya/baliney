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


Route::get('/activity-detail', function () {
    return view('detail/activity-detail');
});

Route::get('/transport-detail', function () {
    return view('detail/transport-detail');
});

Route::get('/villa-detail', function () {
    return view('detail/villa-detail');
});
