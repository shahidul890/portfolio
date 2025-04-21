@extends("layouts.welcome")

@section("page_title", "Projects")

@section("content")
    <x-welcome.page-header/>

    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 52px;">
                        I have worked over <span class="text-orange">{{ BasicInfo('completed_projects') }} projects</span>
                    </h1>
                </div>
                <div class="col-md-12">
                    <x-projects :projects="$projects" />
                </div>
            </div>
        </div>
    </section>
@endsection