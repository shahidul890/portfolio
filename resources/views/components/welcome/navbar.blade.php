<!-- navbar -->
<nav class="navbar navbar-dark text-uppercase text-white navbar-expand-lg fixed-top d-none d-md-block" style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url('/assets/img/footer_bg.svg')">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav gap-3 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('welcome')) active @endif" aria-current="page" href="/">Home</a>
                </li>

                @if (Route::is("welcome"))

                <li class="nav-item">
                    <a class="nav-link" href="#experience">Experiences</a>
                </li>
                    
                <li class="nav-item">
                    <a class="nav-link" href="#experties">Experties</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                @endif

                @if(Route::has('welcome.blogs'))
                <li class="nav-item">
                    <a class="nav-link @if(request()->is("blogs") || request()->is("blog/*")) active @endif" href="/blogs">Blogs</a>
                </li>
                @endif

                @if (!Route::is("welcome"))
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('contact')) active @endif" href="{{route("contact")}}">Contact</a>
                </li>
                @endif
                
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>
                    @if (Route::is("contact"))
                        {{-- <a href="/contact" class="btn-orange btn px-4 text-decoration-none">DOWNLOAD CV</a> --}}
                        {{-- <a href="{{asset('assets/cv/resume-of-shahidul-islam.pdf')}}" target="__blank" class="btn-orange btn px-4 text-decoration-none">DOWNLOAD CV</a> --}}
                    @else
                        <a href="{{route("contact")}}" class="btn-orange btn px-4 text-decoration-none">HIRE ME</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- // navbar end -->