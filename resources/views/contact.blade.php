@extends('layouts.welcome')

@section('page_title', 'Contact')

@push('styles')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6580540719182750"
    crossorigin="anonymous"></script>
@endpush

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

                        <div class="form-group mb-4">
                            <input 
                                type="text" 
                                class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="First Name"
                                name="first_name"
                                id="first_name"
                                value="{{old("first_name")}}"
                                required
                            />
                            @error('first_name') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        <div class="form-group mb-4">
                            <input 
                                type="text" 
                                class="form-control @error('last_name') is-invalid @enderror"
                                placeholder="Last Name"
                                name="last_name"
                                id="last_name"
                                value="{{old("last_name")}}"
                                required
                            />
                            @error('last_name') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        <div class="form-group mb-4">
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

                        <div class="form-group mb-4">
                            <textarea 
                                type="text" 
                                class="form-control @error('message') is-invalid @enderror"
                                placeholder="Your Message"
                                rows="5"
                                name="message"
                                id="message"
                                required
                            >{{old("message")}}</textarea>
                            @error('message') <strong class="text-danger"> {{$message}} </strong> @enderror
                        </div>

                        <div id="form-submit-response"></div>

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
        const fname = document.getElementById("first_name");
        const lname = document.getElementById("last_name");
        const email = document.getElementById("email");
        const message = document.getElementById("message");
        const formSubmitBtn = document.getElementById("contact-btn");
        const formResponseAlert = document.getElementById("form-submit-response");
        const successAlertClassList = ["alert", "alert-success"];
        const errorAlertClassList = ["alert", "alert-danger"];

        let fnameOk = false;
        let lnameOk = false;
        let emailOk = false;
        let messageOk = false;

        contactForm.reset();

        // validate first name
        fname.addEventListener("change", () => {

            if(fname.value.length > 1)
            {
                fname.classList.remove("is-invalid");
                fname.classList.add("is-valid");
                fnameOk = true;
            }
            else
            {
                fname.classList.remove("is-valid"); 
                fname.classList.add("is-invalid"); 
                fnameOk = false;
            }
        });

        // validate last name
        lname.addEventListener("change", () => {

            if(lname.value.length > 1)
            {
                lname.classList.remove("is-invalid"); 
                lname.classList.add("is-valid");
                lnameOk = true;
            }
            else
            {
                lname.classList.remove("is-valid"); 
                lname.classList.add("is-invalid"); 
                lnameOk = false;
            }
        });

        // validate message
        message.addEventListener("change", () => {

            if(message.value.length > 1)
            {
                message.classList.remove("is-invalid"); 
                message.classList.add("is-valid"); 
                messageOk = true;
            }
            else
            {
                message.classList.remove("is-valid"); 
                message.classList.add("is-invalid"); 
                messageOk = false;
            }
        });

        // validate email address
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
                        email.classList.remove("is-invalid");
                        email.classList.add("is-valid");

                        $("#contact-btn").removeAttr("disabled");
                        $("#invalid-email").text("");
                        emailOk = true;
                    },
                    error: (err) => {
                        emailOk = false;
                        email.classList.remove("is-valid");
                        email.classList.add("is-invalid");
                        $("#contact-btn").attr("disabled", "true");
                        $("#invalid-email").text("Please enter valid email address");
                    }
                })
            }
        })

        // form submit
        $("#contact-form").submit((event) => {
            event.preventDefault();

            if(fnameOk && lnameOk && emailOk && messageOk)
            {
                $.ajax({
                    url: contactForm.action,
                    type: contactForm.method,
                    data: $("#contact-form").serialize(),
                    beforeSend: () => {
                        formSubmitBtn.setAttribute("disabled", "disabled");
                        formSubmitBtn.innerHTML = `<span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span><span role="status">Sending...</span>`;
                    },
                    success: (res) => {
                        
                        formSubmitBtn.removeAttribute("disabled");
                        formSubmitBtn.innerText = "Send Message";

                        formResponseAlert.classList.remove(...errorAlertClassList);
                        formResponseAlert.classList.add(...successAlertClassList);
                        formResponseAlert.innerText = res.message;
                    },
                    error: (err) => {
                        
                        formSubmitBtn.removeAttribute("disabled");
                        formSubmitBtn.innerText = "Send Message";

                        formResponseAlert.classList.remove(...successAlertClassList);
                        formResponseAlert.classList.add(...errorAlertClassList);
                        formResponseAlert.innerText = err.responseJSON.message;
                    }
                })
            }
            else
            {
                // console.log(`${fnameOk} ==> ${lnameOk} ==> ${emailOk} ==> ${messageOk}`);
                formSubmitBtn.removeAttribute("disabled");
                formSubmitBtn.innerText = "Send Message";

                formResponseAlert.classList.remove(...successAlertClassList);
                formResponseAlert.classList.add(...errorAlertClassList);
                formResponseAlert.innerText = "Please enter valid information";
            }
        })
    </script>
@endpush