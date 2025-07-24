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

        article a{
            color: rgb(202, 106, 50) !important;
        }

        .code-inline{
            background-color: rgb(29, 29, 63) !important;
            color: white !important;
            font-family: monospace;
            padding: 4px;
            border-radius: 4px;
        }

        .section-title{
            color: rgb(202, 106, 50);
            margin-top: 20px !important;
            margin-bottom: 12px !important;
            font-weight: bold
        }
    </style>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class=" @if(isset($blog) && $blog->show_recent_blogs && $blog->recent_blogs_position == 'right') col-md-9 @else col-md-12 @endif ">
                    <div class="card rounded-3 shadow mb-3 border-orange">
                        <div class="card-body">
                            @yield('blog-content')
                        </div>
                    </div>

                    @if(isset($blog) && $blog->show_author)
                    <x-blogs.author />
                    @endif
                </div>

                @if(isset($blog) && $blog->show_recent_blogs && $blog->recent_blogs_position == 'right')
                <x-blogs.recent-blogs.vertical :recentBlogs="$recentBlogs" />

                @elseif(isset($blog) && $blog->show_recent_blogs && $blog->recent_blogs_position == 'bottom')
                <x-blogs.recent-blogs.horizont :recentBlogs="$recentBlogs" />

                @endif
            </div>
        </div>
    </section>
@endsection