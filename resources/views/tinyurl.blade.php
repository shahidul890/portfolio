@extends('layouts.welcome')

@section('page_title', 'Tiny URL')

@section('metatags')
<!-- SEO Meta Tags -->
<meta name="description" content="You can create a short URL for any long URL using our TinyURL service." />
<meta name="keywords" content="tinyurl, short url, url shortener, create short link, link shortening service">
<meta name="author" content="Md Shahidul Islam">

<!-- Twitter Card -->
<meta name="twitter:title" content="TinyURL - Shorten Your Links" />
<meta name="twitter:description" content="You can create a short URL for any long URL using our TinyURL service." />
<meta name="twitter:image" content="{{ asset('assets/img/md-260kb.png') }}" />
<meta name="twitter:card" content="{{ asset('assets/img/md-260kb.png') }}" />

<!-- Open Graph (for social media previews) -->
<meta property="og:title" content="TinyURL - Shorten Your Links" />
<meta property="og:description" content="You can create a short URL for any long URL using our TinyURL service." />
<meta property="og:type" content="article">
<meta property="og:image" content="{{ asset('assets/img/md-260kb.png') }}" />
<meta property="og:url" content="{{ url()->current() }}" />
@endsection

@section('content')
    
    <x-welcome.page-header/>

    <!-- Form -->
    <section class="container min-vh-100 py-5 my-5">
        <div class="row justify-content-center align-items-start">
            <div class="col-md-8">
                <form action="{{ url()->current() }}" id="turl_form" method="POST">
                    @csrf

                    <div class="form-group mb-4">
                        <textarea class="form-control form-control-lg" name="site_url" placeholder="Enter your URL here. Ex: https://www.example.com" required autofocus></textarea>
                        <span class="invalid-feedback"></span>
                    </div>

                    <button type="submit" class="btn btn-primary">Generate Short URL</button>
                </form>

                <div id="short_url" class="mt-4 d-none">
                    <h4>Your Short URL:</h4>
                    <p class="lead"></p>
                    <button type="button" class="btn btn-sm btn-secondary" id="copy_short_url">Copy to Clipboard</button>
                </div>
            </div>
        </div>
    </section>
    <!-- // Form -->
@endsection

@push('script')
    <script>
        const turlForm = document.getElementById("turl_form");
        const shortUrlContainer = document.getElementById("short_url");
        const copyButton = document.getElementById("copy_short_url");

        turlForm.addEventListener('submit', async function(event){
            event.preventDefault();
            const buttonTextContent = turlForm.querySelector('button[type="submit"]').textContent;

            turlForm.querySelector('button[type="submit"]').disabled = true;
            turlForm.querySelector('button[type="submit"]').textContent = "Generating...";

            turlForm.querySelector('.invalid-feedback').textContent = "";
            turlForm.querySelector('input').classList.remove('is-invalid');

            const formData = new FormData(turlForm);
            const url = this.action;

            // Send the form data to the server
            const response = await fetch(url, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (!response.ok) {
                const errorData = await response.json();
                if (response.status === 422) {
                    // Validation errors
                    turlForm.querySelector('.invalid-feedback').textContent = errorData.errors.site_url[0];
                    turlForm.querySelector('textarea[name="site_url"]').classList.add('is-invalid');
                } else if (response.status === 500) {
                    // Server errors
                    turlForm.querySelector('.invalid-feedback').textContent = "An unexpected error occurred. Please try again later.";
                }
                turlForm.querySelector('.invalid-feedback').classList.add('d-block');
                turlForm.querySelector('button[type="submit"]').disabled = false;
                turlForm.querySelector('button[type="submit"]').textContent = buttonTextContent;
                return;
            }

            const data = await response.json();
            turlForm.querySelector('button[type="submit"]').disabled = false;
            turlForm.querySelector('button[type="submit"]').textContent = buttonTextContent;
            turlForm.reset();

            if (data.success) {
                const shortUrlContainer = document.getElementById("short_url");
                shortUrlContainer.classList.remove("d-none");
                shortUrlContainer.querySelector("p").textContent = data.short_url;
            }
            
        });

        copyButton.addEventListener("click", function() {
            const shortUrlText = shortUrlContainer.querySelector("p").textContent;
            navigator?.clipboard?.writeText(shortUrlText).then(() => {
                alert("Short URL copied to clipboard!");
            }).catch(err => {
                console.error("Failed to copy: ", err);
            });
        });
    </script>
@endpush