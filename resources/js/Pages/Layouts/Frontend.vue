<template>
<!-- navbar -->
<nav class="navbar navbar-dark text-uppercase text-white navbar-expand-lg sticky-top d-none d-md-block" style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url('/assets/img/footer_bg.svg')">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav gap-3 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <Link class="nav-link @if(Route::is('welcome')) active @endif" aria-current="page" href="/">Home</Link>
                </li>

                <!-- @if (Route::is("welcome")) -->
                    
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
                <!-- @endif -->

                <!-- <li class="nav-item">
                    <a class="nav-link @if(request()->is("blogs") || request()->is("blog/*")) active @endif" href="/blogs">Blogs</a>
                </li> -->

                <!-- @if (Route::is("contact")) -->
                <li class="nav-item">
                    <Link class="nav-link @if(Route::is('contact')) active @endif" href="/contact">Contact</Link>
                </li>
                <!-- @endif -->
                
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>
                    <!-- @if (Route::is("contact"))
                        {{-- <a href="/contact" class="btn-orange btn px-4 text-decoration-none">DOWNLOAD CV</a> --}}
                        {{-- <a href="{{asset('assets/cv/resume-of-shahidul-islam.pdf')}}" target="__blank" class="btn-orange btn px-4 text-decoration-none">DOWNLOAD CV</a> --}}
                    @else -->
                        <Link href="/contact" class="btn-orange btn px-4 text-decoration-none">HIRE ME</Link>
                    <!-- @endif -->
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- // navbar end -->

<slot/>

<!-- Footer -->
<footer
    class="footer-bg"
>
    <div class="container text-white">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center justify-content-between" style="min-height: 40vh;">
                    <div class="col-md-8 text-md-start text-center">
                        <h1>Have a project?</h1>
                    </div>
                    <div class="col-md text-md-end text-center">
                        <Link class="btn btn-orange py-3 px-5" href="/contact">LET'S TALK</Link>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center py-3">
                &copy 2023 Shahidul Islam. All Rights Reserved
            </div>
        </div>
    </div>
</footer>
<!-- // Footer end -->

</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>