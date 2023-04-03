{{-- Gestione dell'errore se non dovesse esserci la variabile $comic --}}
@if(isset($comic))
 <div class="my-card mb-5">
    {{-- Controllo che dice-->Se hai la comic_key (l'indice) --}}
    @if(isset($comic_key))
    <a href="{{ route('detail', ['index' => $comic_key]) }}">
        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="comics image">
    </a>
    @endif
    <div class="card-body">
        <span class="card-text">
            {{ strtoupper($comic['series']) }}
        </span>
    </div>
</div>
  {{-- Altrimenti se non trovi la key, stampa che non trovi nulla --}}
@else
<div class="my-card mb-5">
    <h5>No Comics Found</h5>
</div>
    
@endif