<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Bootstrap -->
        <link href="{{asset('bootstrap@5.3.3/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('bootstrap-icons@1.11.3/font/bootstrap-icons.css')}}" />
        @vite('resources/js/app.js')
        @inertiaHead

    </head>
    <body>
        @inertia
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('bootstrap@5.3.3/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>