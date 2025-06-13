@extends("layouts.blog-details")

@section("page_title", \Str::ucfirst($blog->title))

@section('metatags')
    <x-blogs.metatags :blog="$blog" />
@endsection

@section("blog-content")
    <article>
        
        <x-blogs.title :blog="$blog" />

        <section>
            <p>Hey Laravel Developers! 👩‍💻</p>

            <p>Did you know Laravel’s belongsToMany() relationship lets you easily manage many-to-many relationships between models? For instance, consider the User and Role models:</p>

            <p>A Role can belong to multiple users. A User can have multiple roles. To handle this, we use an intermediate (pivot) table to map the relationships.</p>

            <p>Here’s something even cooler:</p>
            
            <p>You can track timestamps for when these relationships are created by using the withTimestamps() method in your relationship definition.</p>

            <img src="{{ asset('uploads/files/25JcsCGa7ncL3rgFVBCgkOqwU4NYaHTMarjQXoHm.png') }}" alt="{{ $blog->title }}" class="img-fluid" />

            <p class="mt-5">This small feature can be incredibly helpful for managing data history in your application!</p>
        </section>
    </article>
@endsection