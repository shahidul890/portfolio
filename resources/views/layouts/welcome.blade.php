<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ MetaInfo('description') }}" />
    <meta name="keywords" content="{{ MetaInfo('keywords') }}">
    <meta name="author" content="{{ MetaInfo('author') }}">

    <meta name="twitter:title" content="{{ MetaInfo('title') }}" />
    <meta name="twitter:description" content="{{ MetaInfo('description') }}" />
    <meta name="twitter:image" content="{{ MetaInfo('image') }}" />
    <meta name="twitter:card" content="{{ MetaInfo('image') }}" />

    <meta name="og:title" content="{{ MetaInfo('title') }}" />
    <meta name="og:description" content="{{ MetaInfo('description') }}" />
    <meta name="og:image" content="{{ MetaInfo('image') }}" />
    <meta name="og:url" content="{{url('/')}}" />

    {{-- For verifying google adsense account --}}
    <meta name="google-adsense-account" content="ca-pub-6580540719182750" />

    {{-- For verify pinterest --}}
    <meta name="p:domain_verify" content="f930ce73e3e3f3d1d833e7a7096e30e4"/>
    

    <title>@hasSection('page_title') @yield('page_title') | @endif {{ MetaInfo('title') }}</title>

    <link rel="shortcut icon" href="{{asset("assets/favicons/favicon.ico")}}" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap@5.3.3/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('bootstrap-icons@1.11.3/font/bootstrap-icons.css')}}" />

    {{-- Fontowesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <x-welcome.stylesheet/>
    @vite([])
    @stack('styles')
</head>
<body>

    <x-welcome.navbar/>

    @yield('content')

    <x-welcome.footer/>

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap@5.3.3/js/bootstrap.bundle.min.js')}}"></script>

    <script>
        // Show navbar on scroll
        window.addEventListener("scroll", () => {
            const navbar = document.querySelector(".navbar");
            const scrollToTopBtn = document.querySelector(".scrollToTopBtn");
            if (window.scrollY > 150) { // Show after scrolling 100px
                navbar.classList.add("show");
                scrollToTopBtn.classList.add("show");
            } else {
                navbar.classList.remove("show");
                scrollToTopBtn.classList.remove("show");
            }
        });

        function scrollToSection() {
            document.getElementById("experience").scrollIntoView({ behavior: "smooth" });
        }

        // Smooth scroll to top
        document.getElementById("scrollToTopBtn").addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
        
    </script>
    
    @stack('script')
</body>
</html>
