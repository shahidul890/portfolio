<!-- Page Header -->
<section class="page-title">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col text-center">
                <h1>@yield('page_title')</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/" class="text-decoration-none text-orange">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">@yield('page_title')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- // Page Header -->