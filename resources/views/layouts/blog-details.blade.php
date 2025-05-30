@extends("layouts.welcome")

@section("content")
    <x-welcome.page-header/>

    <style>
        code{
            margin: 10px 0px;
            padding: 16px;
            display: block;
            border-radius: 10px;
            background-color: rgb(18, 18, 53) !important;
            color: white !important;
            font-family: monospace
        }

        .code-inline{
            background-color: rgb(29, 29, 63) !important;
            color: white !important;
            font-family: monospace;
            padding: 4px;
            border-radius: 4px;
        }
    </style>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card rounded-3 shadow mb-3">
                        <div class="card-body">
                            @yield('blog-content')
                        </div>
                    </div>

                    <x-blogs.author />
                </div>


                <x-blogs.recent-blogs :recentBlogs="$recentBlogs" />
            </div>
        </div>
    </section>
@endsection