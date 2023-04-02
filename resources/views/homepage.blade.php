{{-- Dico che questo file ESTENDE app.blade.php --}}
@extends('layouts.app')

{{-- @section('title')
HomePage
@endsection --}}

{{-- Altro modo di fare la stessa cosa tutto su una riga quando ho solo una variabile: @section('title', 'Homepage') facendo così può anche essere dinamica e utilizzare una variabile: --}}
@section('title', $pagename)

@section ('main_content')

<section class="container">
    <div class="row">

    @forelse($comics as $comic)
        <div class="col-3">

           <div class="my-card">
                  <a href="{{ route('detail', ['index' => $loop->index]) }}">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ substr($comic['title'], 0, 8) }}...">
                  </a>
            </div>

        </div>

        @empty
            <div class="col-12">
                <h2>No Comics found</h2>

            </div>

        
        @endforelse
    </div>
</section>

@endsection