@extends("layouts.welcome")

@section("page_title", "Blogs")

@section("content")
    <x-welcome.page-header/>

    <section class="my-5 py-5">
        <div class="container">
            <div class="row">

                @forelse ($blogs as $blog)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card rounded-4 h-100 border-orange">
                            <div class="card-body">
                                <a href="{{url('/blogs/'.$blog->slug)}}"><img class="card-img-top rounded-top-4" src="{{asset($blog->thumbnail)}}" alt="thumbnail not found for blog#{{$blog->id}}" height="250" /></a>
                                <div class="p-4">
                                    <h5>
                                        <a href="{{url('/blogs/'.$blog->slug)}}" class="text-orange text-decoration-none">{{$blog->title}}</a>
                                    </h5>
                                    
                                    <div class="my-3">
                                        <p class="m-0"> <i class="fa fa-calendar-days"></i> Published: {{$blog->created_at->format("M d, Y")}}</p>
                                        <p class="m-0"> <i class="fa fa-recycle"></i> Last Updated: {{$blog->updated_at->format("M d, Y")}}</p>
                                    </div>

                                    <a href="{{url('/blogs/'.$blog->slug)}}" class="mt-3 btn btn-orange px-4">Read More <i class="fa fa-angles-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    @for ($i=0; $i<9; $i++)
                        <div class="col-md-4 mb-5">
                            <div class="card rounded-4">
                                <div class="car-body">
                                    <img class="card-img-top rounded-top-4" src="{{asset("assets/blogs/web-hosting.jpg")}}" alt="web hosting feature image" />
                                    <div class="p-4">
                                        <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam reiciendis neque voluptas unde dolorum official!</h5>
                                        
                                        <div class="text-muted my-3">
                                            <p class="m-0"> <i class="fa fa-calendar-days"></i> Published: {{now()->subdays(10)->format("M d, Y")}}</p>
                                            <p class="m-0"> <i class="fa fa-recycle"></i> Last Updated: {{now()->subdays(2)->format("M d, Y")}}</p>
                                        </div>

                                        <a href="javascript:alert('Coming soon! Stay with us.')" class="mt-3 btn btn-orange px-4">Read More <i class="fa fa-angles-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                @endforelse

                {{-- <div class="col-12 mt-5 text-center">
                    <a href="#" class="btn btn-orange px-5">Load More</a>
                </div> --}}
            </div>
        </div>
    </section>
@endsection