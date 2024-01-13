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

    <title>@hasSection('page_title') @yield('page_title') | @endif Shahidul Islam | Full-stack Software Developer</title>

    <link rel="shortcut icon" href="{{asset("assets/img/sha.png")}}" type="image/x-icon">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('script')
</body>
</html>
