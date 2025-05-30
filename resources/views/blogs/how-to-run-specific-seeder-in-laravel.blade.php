@extends("layouts.blog-details")

@section("page_title", \Str::ucfirst($blog->title))

@section('metatags')
    <x-blogs.metatags :blog="$blog" />
@endsection

@section("blog-content")
    <div>
        
        <x-blogs.title :blog="$blog" />

        <div class="blog-content py-3 min-vh-100">
            <p class="">This blog post is currently being developed. Thank you for your patience and interest. Please check back soon for updates.</p>
        </div>
    </div>
@endsection