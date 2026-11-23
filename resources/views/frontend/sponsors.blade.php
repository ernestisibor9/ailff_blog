@extends('frontend.master')

@section('home')

@section('title')
    AILFF - Sponsors Page
@endsection

<style>
    /* Set consistent height for cards */
    .card-fixed {
        height: 200px;
        /* Adjust height to your preference */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-fixed .card-body {
        overflow: hidden;
        /* Prevent text from overflowing the card */
        text-overflow: ellipsis;
    }

    /* Optional styling for better layout */
    /* .container {
      margin-top: 20px;
    } */

    .card {
        text-align: center;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }

    .card-text {
        font-size: 1rem;
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
                        <a href="{{url('/')}}">Home</a>
                        <span>Sponsors</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Sponsors</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor1.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor2.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor3.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor4.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor5.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor6.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor7.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('frontend/img/sponsor/sponsor8.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('frontend/img/sponsor/sponsor9.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </section>



@endsection
