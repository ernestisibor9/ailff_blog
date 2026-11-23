@extends('frontend.master')

@section('home')

@section('title')
    AILFF - About Us Page
@endsection

<style>
    /* Set consistent height for cards */
    .card-fixed {
      height: 200px; /* Adjust height to your preference */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-fixed .card-body {
      overflow: hidden; /* Prevent text from overflowing the card */
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
              <span>About Us</span>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 text-right">
            <div class="breadcrumb-text">
              <h3>About Us</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="as-pic">
              <img src="{{asset('frontend/img/aboutus.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="as-text" style="text-align: justify">
              <div class="section-title">
                <span>About us</span>
              </div>
              <p class="f-para text-dark">
                The African Indigenous Language Film Festival was founded three
                years ago by Osezua Stephen-Imobhio, a renowned film and
                television producer, and his wife, Patience Oghre Imobhio, a
                prolific film director. Recognizing the urgent need for the
                preservation and promotion of African indigenous languages,
                arts, culture, and tourism, the Imobhios established the
                festival as a platform to amplify the voices of the voiceless
                through advocacy and inclusivity. Since its inception, the
                festival has grown significantly, attracting filmmakers and
                audiences from across the globe, and has become a pivotal space
                for dialogue on cultural identity and social issues, while
                celebrating the rich tapestry of African narratives
              </p>
              <p class="s-para text-dark">
                The African Indigenous Language Film Festival is dedicated to
                promoting and preserving the rich tapestry of African cultures
                through cinema. Join us to celebrate, learn, and engage with
                evocative storytelling from across the continent.”
              </p>
              <p class="s-para text-dark"></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Section End -->

    <!-- Mision & Vision Section Begin -->
    <div class="container">
      <h4 class="text-center mb-4" style="font-weight: bold; color: #f5004f">
        Our Mission And Vision
      </h4>
      <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
          <div class="card shadow card-fixed">
            <div class="card-body">
              <h5 class="card-title" style="font-weight: bold;">Mission Statement</h5>
              <p class="card-text text-dark">
                To showcase films that honor indigenous languages and promote
                cultural diversity in African cinema.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card shadow card-fixed">
            <div class="card-body">
              <h5 class="card-title" style="font-weight: bold;">Vision Statement</h5>
              <p class="card-text text-dark">
                The African Indigenous Language Film Festival envisions a world
                where African indigenous languages are preserved and promoted,
                amplifying marginalized voices. Through film, we address social
                and global challenges, fostering dialogue that inspires change
                and celebrates diverse cultural narratives.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mision & Vision  Section End -->

    <!-- Member Section Begin -->
    <section class="spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <span>Our Team</span>
              <h2 class="text-dark">Organizing Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member-item set-bg" data-setbg="{{asset('frontend/img/member/mem1.png')}}">
              <div class="mi-text">
                <div class="mt-title">
                  <h4>Osezua Stephen-Imobhio</h4>
                  <span>Festival Director </span>
                </div>
                <!-- <div class="mt-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member-item set-bg" data-setbg="{{asset('frontend/img/member/mem2.png')}}">
              <div class="mi-text">
                <p></p>
                <div class="mt-title">
                  <h4>Pat Oghre Imobhio</h4>
                  <span>Jury</span>
                </div>
                <!-- <div class="mt-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member-item set-bg" data-setbg="{{asset('frontend/img/member/mem3.png')}}">
              <div class="mi-text">
                <p></p>
                <div class="mt-title">
                  <h4>Ojie Asuelime</h4>
                  <span>Technical</span>
                </div>
                <!-- <div class="mt-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member-item set-bg" data-setbg="{{asset('frontend/img/member/mem4.png')}}">
              <div class="mi-text">
                <p></p>
                <div class="mt-title">
                  <h4>Omoye</h4>
                  <span>Marketing </span>
                </div>
                <!-- <div class="mt-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Member Section End -->

    <!-- Call To Action Section Begin -->
    <div class="container-fluid trend-back">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h3 class="text-warning text-center pt-3 mb-3">
            We Seek Your Support
          </h3>
          <p class="text-white text-center">
            Your support is crucial to the African Indigenous Language Film
            Festival's success. By donating, you help us showcase films that
            promote inclusivity while highlighting the challenges faced by
            individuals with Down syndrome, autism, and other conditions during
            our 2025 edition.
          </p>
          <div style="text-align: center">
            <a href="#" class="primary-btn mt-4">Donate Now </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Call To Action Section End -->


@endsection
