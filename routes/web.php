<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NomeController;

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

// Esempio di controller- 
Route::get('/', [NomeController::class, 'homepage'])->name('home');

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
    $comic_key = $index;
    // Metto l'index (uno dei comic) nella variabile che mi creo
    return view('detail', compact('comic', 'comic_key'));
})->name('detail');
