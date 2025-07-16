@extends('layouts.welcome')

@section('page_title', 'Tiny URL')

@section('content')
    
    <x-welcome.page-header/>

    <!-- Form -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center align-items-start">
                <div class="col-md-7">
                    <h2 class="text-center">URL Not Found</h2>
                    <p class="lead text-center">The URL you are looking for does not exist or has been removed.</p>
                    <div class="text-center">
                        <a href="{{ url('/turl') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Form -->
@endsection