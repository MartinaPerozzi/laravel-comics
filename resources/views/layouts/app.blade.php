<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{env('APP_NAME')}}_ @yield('title')</title>

  {{-- Includiamo gli assets con la direttiva @vite senza non potremmo usare Bootstrap, importare le immagini con metodo Blade, Css ecc..--}}
  @vite('resources/js/app.js')
</head>

<body>
  {{-- Includo la navbar come partial --}}
  @include('partials._navbar')
    {{-- @dump($comics) <-- controllare se ricevo le informazioni dalla route--}}

    @yield('jumbotron')

    {{-- Con YIELD metto un segnaposto a cui do un titolo che mi servirà per estenderlo in altri file(vedi home)--}}
    <h1 class="text-center">@yield('title')</h1>
    <main>
      <section class="bg-dark">
        @yield('main_content')
      </section>
    </main>

    @include('partials._footer')

</body>

</html>