{{-- Dico che questo file ESTENDE app.blade.php --}}
@extends('layouts.app')

{{-- @section('title')
HomePage
@endsection --}}

{{-- Altro modo di fare la stessa cosa tutto su una riga quando ho solo una variabile: @section('title', 'Homepage') facendo così può anche essere dinamica e utilizzare una variabile: --}}
@section('title', $pagename)

