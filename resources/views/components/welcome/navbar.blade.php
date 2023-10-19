<!-- navbar -->
    <nav class="navbar text-uppercase navbar-expand-lg bg-body-tertiary sticky-top d-none d-md-block">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav gap-3 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('welcome')) active @endif" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#experties">Experties</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('contact')) active @endif" href="{{route("contact")}}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li>
                        <a href="{{route("contact")}}" class="btn-orange btn px-5 text-decoration-none">HIRE ME</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- // navbar end -->