<!DOCTYPE html>
<html data-bs-theme="dark">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="shortcut icon" href="{{asset("assets/favicons/favicon.ico")}}" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{asset('/bootstrap@5.3.3/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('/bootstrap-icons@1.11.3/font/bootstrap-icons.css')}}" />
        {{-- Fontowesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />


        <style>
            .text-orange{
                color: rgb(248, 91, 0);
            }
            .bg-orange{
                background-color: rgb(248, 91, 0);
            }
        </style>


        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body>
        @inertia

        <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('/bootstrap@5.3.3/js/bootstrap.bundle.min.js')}}"></script>
        <script>
            window.config = {
                app_name: 'Shahidul Islam'
            }
        </script>
    </body>
</html>