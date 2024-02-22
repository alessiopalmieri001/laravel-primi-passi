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
    return view('home');
});

Route::get('secondaryPage', function () {
    return view('secondaryPage');
});

Route::get('terzaPagina', function () {
    return view('terzaPagina');
});

Route::get('quartaPagina', function () {
    return view('quartaPagina');
});