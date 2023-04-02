<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <img src="{{asset('images/dc-logo.png')}}" width="60" class="pe-3"/>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- Dare la classe active quando sul link giusto --}}
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" aria-current="page" href="{{route('home')}}">CHARACTERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">FANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" href="{{route('comics')}}">NEWS</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>