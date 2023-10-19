@extends('layouts.welcome')

@section('page_title', 'Contact')

@section('content')
    
    <x-welcome.page-header/>

    <!-- Form -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <h1>Let's Talk</h1>
                    <p class="text-muted mb-5">Got a project in mind? Fill in the form or send us</p>

                    <form action="{{route("contact.store")}}" method="POST">
                        @csrf

                        <div class="form-group mb-5">
                            <input 
                                type="text" 
                                class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="First Name"
                                name="first_name"
                                required
                            />
                            @error('first_name') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        <div class="form-group mb-5">
                            <input 
                                type="text" 
                                class="form-control @error('last_name') is-invalid @enderror"
                                placeholder="Last Name"
                                name="last_name"
                                required
                            />
                            @error('last_name') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        <div class="form-group mb-5">
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email"
                                name="email"
                                required
                            />
                            @error('email') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        <div class="form-group mb-5">
                            <textarea 
                                type="text" 
                                class="form-control @error('message') is-invalid @enderror"
                                placeholder="Your Message"
                                rows="5"
                                name="message"
                                required
                            ></textarea>
                            @error('message') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        @if(Session::has('success'))
                        <div class="alert alert-success my-4">{{Session::get('success')}} </div>
                        @elseif(Session::has('exception'))
                        <div class="alert alert-success my-4"> {{Session::get('exception')}} </div>
                        @endif

                        <button class="btn btn-orange px-5">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- // Form -->
@endsection