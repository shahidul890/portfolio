<!-- navbar -->
<nav class="navbar navbar-dark text-uppercase text-white navbar-expand-lg fixed-top" style="background: var(--theme-dark-blue);">
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
                    <a class="nav-link @if(Route::is('about')) active @endif" aria-current="page" href="{{ url("/about") }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/#experience">Experiences</a>
                </li>
                    
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/#experties">Experties</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome.projects') }}">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/#services">Services</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>
                    <a href="{{route("contact")}}" class="btn-orange btn px-4 text-decoration-none">HIRE ME</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- // navbar end -->