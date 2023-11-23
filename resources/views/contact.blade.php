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

                    <form action="{{route("contact.store")}}" method="POST" id="contact-form">
                        @csrf

                        <div class="form-group mb-5">
                            <input 
                                type="text" 
                                class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="First Name"
                                name="first_name"
                                value="{{old("first_name")}}"
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
                                value="{{old("last_name")}}"
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
                                id="email"
                                value="{{old("email")}}"
                                required
                            />
                            <strong id="invalid-email" class="text-danger"></strong>
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
                            >{{old("message")}}</textarea>
                            @error('message') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        @if(Session::has('success'))
                        <div class="alert alert-success my-4">{{Session::get('success')}} </div>
                        @elseif(Session::has('exception'))
                        <div class="alert alert-danger my-4"> {{Session::get('exception')}} </div>
                        @endif

                        <button class="btn btn-orange px-5" id="contact-btn" disabled>Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- // Form -->
@endsection

@push('script')
    <script>
        const contactForm = document.getElementById("contact-form");
        const email = document.getElementById("email");
        const isEmailValid = false;

        $("#email").change(() => {
            $("#contact-btn").attr("disabled", "true");

            if(email.value.length > 4)
            {
                $.ajax({
                    url: "/check/validity?email="+email.value,
                    type: "GET",
                    beforeSend: () => {
                        $("#invalid-email").html(`<span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span><span role="status">checking...</span>`);
                    },
                    success: (resp) => {
                        email.classList.remove("is-invalid")
                        email.classList.add("is-valid");

                        $("#contact-btn").removeAttr("disabled");
                        $("#invalid-email").text("");
                    },
                    error: (err) => {
                        email.classList.remove("is-valid")
                        email.classList.add("is-invalid");
                        $("#contact-btn").attr("disabled", "true");
                        $("#invalid-email").text("Please enter valid email address");
                    }
                })
            }
        })

        $("#contact-form").submit((event) => {
            event.preventDefault();
            
            $.ajax({
                url: contactForm.action,
                type: contactForm.method,
                data: $("#contact-form").serialize(),
                beforeSend: () => {
                    $("#contact-btn").attr("disabled", "true")
                    .html(`<span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span><span role="status">Sending...</span>`);
                },
                success: (res) => {
                    $("#contact-btn").removeAttr("disabled")
                    .html(`Send Message`);
                    console.log(res);
                },
                error: (err) => {

                    console.log(err);
                }
            })
        })
    </script>
@endpush