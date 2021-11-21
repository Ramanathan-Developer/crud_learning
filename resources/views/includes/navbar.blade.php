<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mr Traveller<sup><i class="fa fa-plane" aria-hidden="true"></i></sup></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-md-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link fw-bold" aria-current="page" href="/">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="/register">Register</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('form.create') }}">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" aria-current="page" href="/">Logout</a>
                </li>
                @endauth
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
