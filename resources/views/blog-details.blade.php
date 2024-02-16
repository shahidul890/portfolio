@extends("layouts.welcome")

@section("page_title", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, est?")

@section("content")
    <x-welcome.page-header/>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card rounded-3 shadow mb-5">
                        <div class="card-body">
                            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, est?</h2>
                            
                            <div class="d-flex gap-3 text-muted mb-5">
                                <p class="m-0"> <i class="fa fa-calendar-days"></i> Published: {{now()->subdays(10)->format("F d, Y")}}</p>
                                <p class="m-0"> <i class="fa fa-recycle"></i> Last Updated: {{now()->subdays(2)->format("F d, Y")}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <p>Related Blogs</p>
                    <h1 style="font-size: 52px;">Maybe you will<span class="text-orange"> benefit to know </span> </h1>

                    <div class="row">
                        @for ($i=0; $i<3; $i++)
                            <div class="col-md-4 mb-5">
                                <div class="card shadow rounded-4">
                                    <div class="car-body">
                                        <img class="card-img-top rounded-top-4" src="{{asset("assets/blogs/web-hosting.jpg")}}" alt="web hosting feature image" />
                                        <div class="p-4">
                                            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam reiciendis neque voluptas unde dolorum official!</h5>
                                            <a href="{{url("/blog/lorem-ipsum")}}" class="mt-3 btn btn-orange px-4">Read More <i class="fa fa-angles-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection