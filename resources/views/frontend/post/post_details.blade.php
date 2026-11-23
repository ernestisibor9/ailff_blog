@extends('frontend.master')

@section('title')
    {{ $postDetails->post_title }} - AILFF Blog
@endsection

@section('home')

<style>
    /* Post Details Custom Styles */
    .post-details-section {
        padding: 80px 0;
        background-color: #111111;
        color: #e0e0e0;
    }

    .post-header {
        margin-bottom: 40px;
        text-align: center;
    }

    .post-header h1 {
        font-size: 2.8rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .post-meta {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        font-size: 0.95rem;
        color: #999;
    }

    .post-meta i {
        color: #e53637; /* AILFF Pink Accent */
        margin-right: 5px;
    }

    .post-meta .category-badge {
        background-color: #e53637;
        color: #fff;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        text-transform: uppercase;
        font-weight: 600;
    }

    /* Main Image (Sketch: Top Large Box) */
    .post-main-image-container {
        margin-bottom: 25px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.6);
        border: 1px solid #2a2a2a;
    }

    .post-main-image-container img {
        width: 100%;
        max-height: 650px;
        object-fit: cover;
        display: block;
    }

    /* Multi-Images Gallery (Sketch: Bottom Grid) */
    .post-gallery-title {
        font-size: 1.4rem;
        color: #ffffff;
        margin-bottom: 20px;
        border-bottom: 2px solid #e53637;
        display: inline-block;
        padding-bottom: 5px;
        font-weight: 600;
    }

    .post-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .gallery-item {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.4);
        border: 1px solid #2a2a2a;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #1a1a1a;
        position: relative;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.6);
        border-color: #e53637;
    }

    .gallery-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    /* Content Area */
    .post-content {
        font-size: 1.15rem;
        line-height: 1.9;
        color: #cccccc;
        margin-bottom: 50px;
        padding-top: 20px;
        border-top: 1px solid #2a2a2a;
    }

    .post-content p {
        margin-bottom: 20px;
    }

    .post-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 20px 0;
    }

    /* Back Button */
    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #fff;
        background: transparent;
        border: 2px solid #e53637;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 1px;
    }

    .back-btn:hover {
        background: #e53637;
        color: #fff;
        text-decoration: none;
        box-shadow: 0 5px 15px rgba(229, 54, 55, 0.4);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .post-header h1 { font-size: 2rem; }
        .post-meta { flex-direction: column; gap: 10px; }
        .post-main-image-container img { height: 300px; }
        .post-gallery { grid-template-columns: 1fr; }
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
                        <span class="text-white-50">{{ Str::limit($postDetails->post_title, 30) }}</span>
                    </div>
                </div>
                <div class="text-right col-lg-6 col-md-6">
                    <div class="breadcrumb-text">
                        <h3 class="text-white">Post Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Post Details Section Begin -->
    <section class="post-details-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Header -->
                    <div class="post-header">
                        <h1>{{ $postDetails->post_title }}</h1>
                        <div class="post-meta">
                            <span>
                                <i class="fa fa-calendar-o"></i>
                                {{ \Carbon\Carbon::parse($postDetails->created_at)->format('F j, Y') }}
                            </span>
                            <span>
                                <i class="fa fa-commenting-o"></i>
                                {{ $postDetails->comments->count() }} Comments
                            </span>
                            <span>
                                <i class="fa fa-eye"></i>
                                {{ $postDetails->views }} Views
                            </span>
                            @if($postDetails->category)
                                <span class="category-badge">{{ $postDetails->category->category_name }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Main Image (Sketch: Top Large Box) -->
                    @if($postDetails->post_image)
                        <div class="post-main-image-container">
                            <img src="{{ asset($postDetails->post_image) }}" alt="{{ $postDetails->post_title }}">
                        </div>
                    @endif

                    <!-- Multiple Images Gallery (Sketch: Sub images grid) -->
                    @if($multiImage->isNotEmpty())
                        <div class="mb-4">
                            <h4 class="post-gallery-title">Gallery Images</h4>
                            <div class="post-gallery">
                                @foreach($multiImage as $img)
                                    <!-- Using the 'multi_photo' column name based on your StorePost method -->
                                    <a href="{{ asset($img->multi_photo) }}" target="_blank" class="gallery-item">
                                        <img src="{{ asset($img->multi_photo) }}" alt="Post Gallery Image">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Post Content -->
                    <div class="post-content">
                        {!! $postDetails->long_descp !!}
                    </div>

                    <!-- Back to Blog -->
                    <div class="pt-4 mt-5 text-center border-top" style="border-color: #2a2a2a !important;">
                        <a href="{{ route('blog') }}" class="mt-4 back-btn">
                            <i class="fa fa-arrow-left"></i> Back to Blog
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Post Details Section End -->

@endsection
