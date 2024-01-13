<!-- Page Header -->
<section class="page-title">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col text-center">
                <h1>@yield('page_title')</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/" class="text-decoration-none @if(request()->is("blog/*")) text-white @else text-orange @endif">Home</a></li>
                        
                        @if(request()->is("blog/*"))
                        <li class="breadcrumb-item"><a href="/blogs" class="text-decoration-none text-orange">Blogs</a></li>
                        @endif
                        
                        <li class="breadcrumb-item" aria-current="page">@yield('page_title')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- // Page Header -->