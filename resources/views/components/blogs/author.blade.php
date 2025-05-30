<footer class="card shadow rounded">
    <div class="card-body">
            <div class="row">
            <div class="col-md-12">
                    <div class="d-flex gap-2">
                    <div class="text-center w-50">
                        <img src="{{asset('assets/img/md-shahidul-islam.jpg')}}" alt="Avatar of shahidul" width="90" class="rounded img-fluid" />
                        <p class="m-0">{{ __("Author") }}</p>
                        <a href="{{url('/contact')}}" class="btn btn-sm btn-orange mt-1">{{ __("Hire Me") }}</a>
                    </div>
                    <div>
                        <h5 class="m-0 fw-bolder">{{ __("Md Shahidul Islam") }}</h5>
                        <small class="m-0 fw-bold">{{ __("Full-Stack Software Developer") }}</small>
                        <br />
                        <small>
                            As a full-stack developer, I've been working for over {{ str_replace('+', '', BasicInfo('experience')) }} years. I am from Bangladesh and I love to write tutorials and tips that can help to other artisan. I am a big fan of PHP, Laravel, WordPress, Vue, Javascript, Tailwind CSS and Bootstrap from the early stage. I believe in Hardworking and Consistency.
                        </small>

                        <div class="d-flex gap-3 mt-3">
                            <p class="m-0">{{ __("Follow me") }}:</p>
                            <div class="d-flex gap-2">
                                <a href="{{ SocialMedia('github') }}" target="__blank" title="Github"><i class="fa-brands fa-github"></i></a>
                                <a href="{{ SocialMedia('linkedin') }}" target="__blank" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="mailto:{{ BasicInfo('contact_mail') }}" target="__blank" title="Email"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>