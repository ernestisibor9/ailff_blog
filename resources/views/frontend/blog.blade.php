@extends('frontend.master')

@section('title')
    AILFF - Blog Page
@endsection

@section('home')

@php
    // Using paginate(6) for a nicer 3-column grid layout (2 rows)
    $posts = \App\Models\Post::latest()->paginate(6);
@endphp

<style>
    /* Blog Page Custom Styles */
    .blog-page-section {
        padding: 80px 0;
        background-color: #111111; /* Matches the dark theme */
    }

    .blog-card {
        background: #1a1a1a;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #2a2a2a;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        border-color: #e53637; /* AILFF Pink Accent */
    }

    .blog-card-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-bottom: 1px solid #2a2a2a;
    }

    .blog-card-body {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .blog-meta {
        font-size: 0.85rem;
        color: #999;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .blog-meta i {
        color: #e53637; /* Pink Accent */
        margin-right: 5px;
    }

    .blog-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .blog-title a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .blog-title a:hover {
        color: #e53637;
    }

    .blog-excerpt {
        color: #b0b0b0;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .blog-author {
        display: flex;
        align-items: center;
        border-top: 1px solid #2a2a2a;
        padding-top: 15px;
        margin-top: auto;
    }

    .blog-author img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 12px;
    }

    .blog-author-text h5 {
        color: #fff;
        font-size: 0.9rem;
        margin: 0;
        font-weight: 600;
    }

    .blog-author-text span {
        color: #e53637;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 100px 0;
        color: #fff;
    }
    .empty-state h3 {
        font-size: 2rem;
        margin-bottom: 15px;
    }
    .empty-state p {
        color: #999;
    }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="{{url('/')}}" class="text-white">Home</a>
                        <span class="text-white-50">Blog</span>
                    </div>
                </div>
                <div class="text-right col-lg-6 col-md-6">
                    <div class="breadcrumb-text">
                        <h3 class="text-white">Our Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-page-section">
        <div class="container">
            @if ($posts->isEmpty())
                <div class="empty-state">
                    <h3>No Posts Found</h3>
                    <p>Check back later for new articles and updates.</p>
                </div>
            @else
                <div class="row gy-4">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-card">
                                <!-- Image -->
                                <a href="{{ url('post/details/' . $post->id . '/' . $post->post_slug) }}">
                                    <img src="{{ asset($post->post_image) }}" alt="{{ $post->post_title }}" class="blog-card-img">
                                </a>

                                <!-- Body -->
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <span>
                                            <i class="fa fa-calendar-o"></i>
                                            {{ \Carbon\Carbon::parse($post->created_at)->format('M j, Y') }}
                                        </span>
                                        <span>
                                            <i class="fa fa-commenting-o"></i>
                                            {{ $post->comments->count() }}
                                        </span>
                                    </div>

                                    <h4 class="blog-title">
                                        <a href="{{ url('post/details/' . $post->id . '/' . $post->post_slug) }}">
                                            {{ \Illuminate\Support\Str::limit($post->post_title, 50) }}
                                        </a>
                                    </h4>

                                    <p class="blog-excerpt">
                                        {{-- If you have a post_excerpt field, use it. Otherwise, this generates a snippet from the title/content --}}
                                        {{ Str::limit(strip_tags($post->post_content ?? 'Discover the latest updates, insights, and stories from the African Indigenous Language Film Festival.'), 100) }}
                                    </p>

                                    <div class="blog-author">
                                        <img src="{{ asset('frontend/img/blog/author1.jpeg') }}" alt="Author">
                                        <div class="blog-author-text">
                                            <h5>Osezua Stephen-Imobhio</h5>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-5 row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="pagination-dark">
                            {!! $posts->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
