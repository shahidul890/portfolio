<!-- Page Header -->
<section class="page-title">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col text-center">
                @php
                    $page_title = app()->view->getSections()['page_title'];
                @endphp
                
                {{-- <h1>{{\Str::limit($page_title, 20)}}</h1> --}}
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center gap-2">
                        <li class="breadcrumb-item fs-3"><a href="/" class="text-decoration-none @if(request()->is("blogs/*")) text-white @else text-orange @endif">Home</a></li>
                        
                        @if(request()->is("blogs/*"))
                        <li class="breadcrumb-item fs-3"><a href="/blogs" class="text-decoration-none text-orange">Blogs</a></li>
                        @endif
                        <li class="breadcrumb-item fs-3" aria-current="page">{{\Str::limit($page_title, 20)}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- // Page Header -->