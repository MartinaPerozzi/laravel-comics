@extends('layouts.app')
{{-- SEZIONE DELLE CARDS --}}
@section('cards')
<div class="container">
  <div class="card-content">
    <div class="row row-cols-6">
       @forelse($comics as $comic)
            <div class="col">
                <div class="my-card">
                  <a href="{{ route('detail', ['index' => $loop->index]) }}">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="">
                  </a>
                    <div class="card-body">
                      <p class="card-text">
                        {{ strtoupper($comic['series']) }}
                      </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
              <h4>No Comics Found</h4>

            </div>
      @endforelse

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

