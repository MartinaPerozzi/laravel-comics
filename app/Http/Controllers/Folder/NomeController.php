<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NomeController extends Controller
{
    public function homepage()
    {
        // Mi prendo l'array di dati dalla cartella config
        $comics =  config('comicsdb.comics');
        $pagename = 'Homepage';
        // Mi ritorno la homepage e la variabile (contenente l'array di dati) con il compact
        return view('homepage', compact('comics', 'pagename'));
    }
}
