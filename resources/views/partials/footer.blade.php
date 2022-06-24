<footer class="container-fluid border-top my-2">
    <section class="py-3 d-flex flex-wrap justify-content-between align-items-center">
        <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="{{asset('img/logo.png')}}" alt="Logo">
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="{{ Route('home')}}" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="{{ Route('movies')}}" class="nav-link px-2 text-muted">Movies</a></li>
            <li class="nav-item"><a href="{{ Route('about')}}" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="{{ Route('contact')}}" class="nav-link px-2 text-muted">Contact Us</a></li>
        </ul>
    </section>
</footer>

