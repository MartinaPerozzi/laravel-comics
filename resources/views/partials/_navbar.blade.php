<header>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Comics Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                {{-- Dare la classe active quando sul link giusto --}}
            <a class="nav-link @if(Request::route()->getName() == 'home') active @endif" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">Comics</a>
            </li>
           
        </ul>
        </div>
    </div>
    </nav>
</header>