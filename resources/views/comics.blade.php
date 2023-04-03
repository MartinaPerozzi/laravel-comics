@extends('layouts.app')
{{-- JUMBOTRON --}}
@section('jumbotron')
<div class="jumbotron-img">
  <img src="{{asset('images/jumbotron.jpg')}}"/>
</div>
@endsection

{{-- SEZIONE DELLE CARDS --}}
@section('cards')
<div class="container cards-comics">
  <div class="label-card"> 
    <span>CURRENT SERIES</span>
  </div>
  <div class="card-content pt-5 pb-3">
    <div class="row row-cols-6">
      {{-- Ciclo che genera l'indice del libro man mano --}}
       @forelse($comics as $comic_key=> $comic)
            <div class="col">
              {{-- Includo la card di volta in volta --}}
             @include('partials._card_comic')

            </div>
            @empty
            {{-- Se non trovi niente stampa "No comics found" --}}
            <div class="col-12">
              <h4 class="text-white">No Comics Found</h4>
            </div>
            {{-- Fine del ciclo --}}
      @endforelse
      
    </div>
    <div class="label-card-button"> 
         <button type="button"> LOAD MORE</button>
    </div>

  </div>

</div>
@endsection

{{-- SEZIONE DELLE ICONE NAV --}}
@section('main_navbar')
<div class="main-nav">
    <div class="container">
      <div class="row row-cols-5">
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
              src="{{asset('images/buy-comics-digital-comics.png')}}"
              alt="Digital comics"
            />
            <span>DIGITAL COMICS</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-comics-merchandise.png')}}"
              alt="Digital comics"
            />
            <span>DC MERCHANDISE</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-comics-subscriptions.png')}}"
              
              alt="Digital comics"
            />
            <span>SUBSCRIPTION</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-comics-shop-locator.png')}}"
              
              alt="Digital comics"
            />
            <span>COMIC SHOP LOCATOR</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-dc-power-visa.svg')}}"
              
              alt="Digital comics"
            />
            <span>DC POWER VISA</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

