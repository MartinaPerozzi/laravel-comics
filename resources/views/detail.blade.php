@extends('layouts.app')

@section('jumbotron')
<div class="jumbotron-img">
  <img src="{{asset('images/jumbotron.jpg')}}"/>
</div>
@endsection

@section('cards')
@section('cards')
<div class="container cards-comics">
  <div class="label-card"> 
    <span>CURRENT SERIES</span>
  </div>
  <div class="card-content pt-5 pb-3">
    <div class="row row-cols-6">
    
       
            <div class="col">
              {{-- Includo la card di volta in volta --}}
             @include('partials._card_comic')

            </div>
       
      
    </div>
    <div class="label-card-button"> 
         <button type="button"> LOAD MORE</button>
    </div>

  </div>

</div>
@endsection
@endsection