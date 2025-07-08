<header>
    <h2>{{\Str::ucfirst($blog->title)}}</h2>
                            
    <div class="d-flex flex-column text-muted mb-5 border-bottom pb-4 border-secondary">
        <p class="m-0"> <i class="fa fa-calendar-days me-2"></i>{{ __("Published") }} {{ $blog->created_at?->format(APP_DATE_FORMAT) }}</p>
        <p class="m-0"> <i class="fa fa-recycle me-2"></i>{{ __("Last Updated") }}: {{ $blog->updated_at?->format(APP_DATE_FORMAT) }}</p>
    </div>
</header>