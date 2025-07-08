<!-- SEO Meta Tags -->
<meta name="description" content="{{ $blog->description }}" />
<meta name="keywords" content="{{ implode(",", $blog->keywords) }}">
<meta name="author" content="{{ MetaInfo('author') }}">

<!-- Twitter Card -->
<meta name="twitter:title" content="{{ $blog->title }}" />
<meta name="twitter:description" content="{{ $blog->description }}" />
<meta name="twitter:image" content="{{ $blog->thumbnail }}" />
<meta name="twitter:card" content="{{ $blog->thumbnail }}" />

<!-- Open Graph (for social media previews) -->
<meta property="og:title" content="{{ $blog->title }}" />
<meta property="og:description" content="{{ $blog->description }}" />
<meta property="og:type" content="article">
<meta property="og:image" content="{{ $blog->thumbnail }}" />
<meta property="og:url" content="{{ route('welcome.blogs.show', $blog->slug) }}" />