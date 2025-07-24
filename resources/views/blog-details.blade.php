@extends("layouts.welcome")

@section("page_title", \Str::ucfirst($blog->title))

@section("content")
    <x-welcome.page-header/>

    <style>
        code{
            margin: 10px 0px;
            padding: 20px;
            display: block;
            border-radius: 10px;
            background-color: rgb(41, 41, 41) !important;
            color: white !important;
            font-family: monospace
        }

        .blog-content img{
            width: 100% !important;
            /* object-fit: contain; */
            height: auto;
            margin: 10px 0px;
        }
    </style>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card rounded-3 shadow mb-3">
                        <div class="card-body">
                            <h2>{{\Str::ucfirst($blog->title)}}</h2>
                            
                            <div class="d-flex gap-3 text-muted mb-5">
                                <p class="m-0"> <i class="fa fa-calendar-days"></i> Published: {{$blog->created_at->format("F d, Y")}}</p>
                                <p class="m-0"> <i class="fa fa-recycle"></i> Last Updated: {{$blog->updated_at->format("F d, Y")}}</p>
                            </div>

                            <div class="blog-content">
                                {!!$blog->content!!}
                            </div>
                        </div>
                    </div>

                    <div class="card shadow rounded">
                        <div class="card-body">
                             <div class="row">
                                <div class="col-md-12">
                                     <div class="d-flex gap-2">
                                        <div class="text-center w-50">
                                            <img src="{{asset('assets/img/md-shahidul-islam.jpg')}}" alt="Avatar of shahidul" width="90" class="rounded img-fluid" />
                                            <p class="m-0">Author</p>
                                            <a href="{{url('/contact')}}" class="btn btn-sm btn-orange mt-1">Hire Me</a>
                                        </div>
                                        <div>
                                            <h5 class="m-0 fw-bolder">Md Shahidul Islam</h5>
                                            <small class="m-0 fw-bold">Full-Stack Software Developer</small>
                                            <br />
                                            <small>
                                                As a full-stack developer, I've been working for over {{ str_replace('+', '', BasicInfo('experience')) }} years. I am from Bangladesh and I love to write tutorials and tips that can help to other artisan. I am a big fan of PHP, Laravel, WordPress, Vue, Javascript, Tailwind CSS and Bootstrap from the early stage. I believe in Hardworking and Consistency.
                                            </small>

                                            <div class="d-flex gap-3 mt-3">
                                                <p class="m-0">Follow me:</p>
                                                <div class="d-flex gap-2">
                                                    <a href="{{ SocialMedia('github') }}" target="__blank" title="Github"><i class="fa-brands fa-github"></i></a>
                                                    <a href="{{ SocialMedia('linkedin') }}" target="__blank" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
                                                    <a href="mailto:{{ BasicInfo('contact_mail') }}" target="__blank" title="Email"><i class="fa fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <p class="text-orange">Recent Blogs</p>
                    <h3 style="font-size: 32px;">Maybe you will<span class="text-orange"> benefit to know </span> </h3>

                    <div class="d-flex gap-3 flex-column">
                        @foreach ($recentBlogs as $blog)
                            <div class="mb-3">
                                <div class="card shadow rounded-4">
                                    <div class="car-body">
                                        <img class="rounded-start-4 img-fluid" src="{{asset($blog->thumbnail)}}" alt="{{ $blog->title }}" />
                                        <div class="p-4">
                                            <h5>{{ $blog->title }}</h5>
                                            <a href="{{route('welcome.blogs.show', $blog->slug)}}" class="mt-3 btn btn-orange px-4">Read More <i class="fa fa-angles-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection