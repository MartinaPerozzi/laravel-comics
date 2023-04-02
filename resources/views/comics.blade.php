<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel 9 + Bootstrap Template</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
  {{-- <img class="my-1" src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
  {{-- Includo la navbar come partial --}}
  @include('partials._navbar')


    

  @include('partials._footer')

</body>

</html>