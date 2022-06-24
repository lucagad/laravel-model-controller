<header class="container-fluid border-bottom">
    <navbar class="d-flex flex-wrap justify-content-center py-3 mb-4 ">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="{{asset('img/logo.png')}}" alt="Logo">
        <span class="fs-4">BoolMovies</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ Route('home')}}" class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ Route('home')}}" class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a></li>
        <li class="nav-item"><a href="{{ Route('about')}}" class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a></li>
        <li class="nav-item"><a href="{{ Route('contact')}}" class="nav-link {{Route::currentRouteName() === 'contact' ? 'active' : '' }}">Contact Us</a></li>
    </ul>
    </navbar>
</header>
