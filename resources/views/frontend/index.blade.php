@extends('frontend.master')

@section('home')

@section('title')
    AILFF - Home Page
@endsection

<!-- Hero Section Begin -->
@include('frontend.home.hero')
<!-- Hero Section End -->

<!-- About Us Section Begin -->
@include('frontend.home.about')
<!-- About Us Section End -->

<!-- Ads Section Begin -->
@include('frontend.home.ads')
<!-- About Us Section End -->

<!-- Services Section Begin -->
@include('frontend.home.services')
<!-- Services Section End -->

<!-- Portfolio Section Begin -->
@include('frontend.home.portfolio')
<!-- Portfolio Section End -->

<!-- Testimonial Section Begin -->
@include('frontend.home.testimonial')
<!-- Testimonial Section End -->

<!-- Call To Action Section Begin -->
@include('frontend.home.call_to_action')
<!-- Call To Action Section End -->

<!-- Member Section Begin -->
@include('frontend.home.member')
<!-- Member Section End -->

<!-- Sponsors Section Begin -->
@include('frontend.home.sponsor')
<!---Sponsors Section Ends-->

<!-- Blog Section Begin -->
@include('frontend.home.blog')
<!-- Blog Section End -->

@endsection
