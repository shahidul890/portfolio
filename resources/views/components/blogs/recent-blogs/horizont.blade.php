<div class="row">
    <div class="col-12">
        <p class="text-orange">{{__("Recent Blogs")}}</p>
        <h3 style="font-size: 24px;">Maybe you will<span class="text-orange"> benefit to know </span> </h3>

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