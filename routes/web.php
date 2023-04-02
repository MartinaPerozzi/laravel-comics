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
    // Mi prendo l'array di dati dalla cartella config
    $comics =  config('comicsdb.comics');
    $pagename = 'Homepage';
    // Mi ritorno la homepage e la variabile (contenente l'array di dati) con il compact
    return view('homepage', compact('comics', 'pagename'));
})->name('home');

Route::get('/comics', function () {
    // Mi prendo l'array di dati dalla cartella config
    $comics =  config('comicsdb.comics');
    $pagename = 'Comics';
    // Mi ritorno la homepage e la variabile (contenente l'array di dati) con il compact
    return view('comics', compact('comics', 'pagename'));
})->name('comics');

Route::get('/detail', function () {
    // Mi prendo l'array di dati dalla cartella config
    $comics =  config('comicsdb.comics');
    $pagename = 'Comics';
    // Mi ritorno la homepage e la variabile (contenente l'array di dati) con il compact
    return view('detail', compact('comics', 'pagename'));
})->name('detail');
