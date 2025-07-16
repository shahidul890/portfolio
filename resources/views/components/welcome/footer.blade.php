<!-- Footer -->
<footer
    class="footer-bg"
>
    <div class="container text-white pb-3">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center justify-content-between" style="min-height: 40vh;">
                    <div class="col-md-8 text-md-start text-center">
                        <h1>Have a project?</h1>
                    </div>
                    <div class="col-md text-md-end text-center">
                        <a class="btn btn-orange py-3 px-5" href="{{route("contact")}}">LET'S TALK</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-start text-xs">
                {{ BasicInfo('app_version') }} &copy {{ date('Y') }} <a href="{{ url('/') }}" class="text-orange">{{ BasicInfo("full_name") }}</a>. All Rights Reserved.
            </div>
            <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item text-xs"><a href="{{route('tiny-url')}}" class="text-white">Tiny URL</a></li>
                    <li class="list-inline-item text-xs"><a href="{{route('welcome.blogs')}}" class="text-white">Blogs</a></li>
                    <li class="list-inline-item text-xs"><a href="{{route('contact')}}" class="text-white">Contact</a></li>
                    <li class="list-inline-item text-xs"><a href="https://codingwith.mdshahidul.com" target="__blank" class="text-white">Tutorial</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- // Footer end -->

<div class="scroll-to-top">
    <div class="scrollToTopBtn" id="scrollToTopBtn">
        <i class="fa fa-angle-up text-white"></i>
    </div>
</div>