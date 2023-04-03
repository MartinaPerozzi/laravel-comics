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
    // testare l'errore-->$comics = [];
    $pagename = 'Comics';
    return view('comics', compact('comics', 'pagename'));
})->name('comics');

Route::get('/detail/{index}', function ($index) {
    // Mi prendo l'array di dati dalla cartella config
    $comics =  config('comicsdb.comics');
    $comic = $comics[$index];
    $book_key = $index;
    // Metto con l'index uno dei comic nella variabile che mi creo
    return view('detail', compact('comic', 'book_key'));
})->name('detail');
