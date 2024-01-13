@extends("layouts.welcome")

@section("page_title", "Blogs")

@section("content")
    <x-welcome.page-header/>

    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                @for ($i=0; $i<9; $i++)
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

                <div class="col-12 mt-5 text-center">
                    <a href="#" class="btn btn-orange px-5">Load More</a>
                </div>
            </div>
        </div>
    </section>
@endsection