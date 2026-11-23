<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="AILFF - Website" />
    <meta name="keywords" content="ailff, African, Indigenous, 'Language', 'Film', 'Festival', html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('backend/images/logo2.png') }}" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-JobWAqYk5CSjWuVV3mxgS+MmccJqkrBaDhk8SKS1BW+71dJ9gzascwzW85UwGhxiSyR7Pxhu50k+Nl3+o5I49A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/lightbox.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<style>
    .sponsor-slider {
        width: 100%;
        overflow: hidden;
        background: #f9f9f9;
        padding: 20px 0;
    }

    .sponsor-track {
        display: flex;
        gap: 30px;
        animation: scroll 15s linear infinite;
        /* Adjust speed and smoothness */
    }

    .sponsor-track img {
        max-height: 80px;
        /* Set height for images */
        object-fit: contain;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
            /* Moves by half the width of the duplicated track */
        }
    }
</style>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Header Section Begin -->
    @include('frontend.body.header')
    <!-- Header End -->

    <!-- Main Content Begin -->
    @yield('home')
    <!-- Main Content Ends -->

    <!-- Hero Section Begin -->

    <!-- Hero Section End -->

    <!-- About Us Section Begin -->

    <!-- About Us Section End -->

    <!-- Services Section Begin -->

    <!-- Services Section End -->

    <!-- Portfolio Section Begin -->

    <!-- Portfolio Section End -->

    <!-- Testimonial Section Begin -->

    <!-- Testimonial Section End -->

    <!-- Call To Action Section Begin -->

    <!-- Call To Action Section End -->

    <!-- Member Section Begin -->

    <!-- Member Section End -->

    <!-- Sponsors Section Begin -->

    <!---Sponsors Section Ends-->

    <!-- Blog Section Begin -->

    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    @include('frontend.body.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/lightbox-plus-jquery.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("sponsorCarousel");
            const intervalTime = 3000; // Slide change time in ms

            let currentIndex = 0;
            const items = carousel.querySelectorAll(".carousel-item");
            const totalItems = items.length;

            setInterval(() => {
                items[currentIndex].classList.remove("active");
                currentIndex = (currentIndex + 1) % totalItems;
                items[currentIndex].classList.add("active");
            }, intervalTime);
        });
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

</body>

</html>
