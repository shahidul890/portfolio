<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I offer Web design, development, Rest API, and Bug-fixing services" />
    <meta name="keywords" content="web developer, software developer, programming, software engineer, developer">
    <meta name="author" content="Md Shahidul Islam">

    <meta name="twitter:title" content="Md Shahidul Islam - Full-stack Software Developer" />
    <meta name="twitter:description" content="I offer Web design, development, Rest API, and Bug-fixing services" />
    <meta name="twitter:image" content="{{asset("assets/img/md-shahidul-islam.jpg")}}" />
    <meta name="twitter:card" content="{{asset("assets/img/md-shahidul-islam.jpg")}}" />

    <meta name="og:title" content="Md Shahidul Islam - Full-stack Software Developer" />
    <meta name="og:description" content="I offer Web design, development, Rest API, and Bug-fixing services" />
    <meta name="og:image" content="{{asset("assets/img/md-shahidul-islam.jpg")}}" />
    <meta name="og:url" content="{{url('/')}}" />

    {{-- For verifying google adsense account --}}
    <meta name="google-adsense-account" content="ca-pub-6580540719182750" />

    <title>@hasSection('page_title') @yield('page_title') | @endif Shahidul Islam - Full-stack Software Developer</title>

    <link rel="shortcut icon" href="{{asset("assets/img/sha.png")}}" type="image/x-icon">


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
    @stack('styles')
</head>
<body>

    <x-welcome.navbar/>

    @yield('content')

    <x-welcome.footer/>

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap@5.3.3/js/bootstrap.bundle.min.js')}}"></script>
    
    @stack('script')
</body>
</html>
