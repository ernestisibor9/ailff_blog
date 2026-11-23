@extends('frontend.master')

@section('home')

@section('title')
    AILFF - Gallery Page
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

 <style>
    .carousel-item {
        height: 500px;
    }
    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .carousel-caption {
        background: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 10px;
    }
</style>

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
                <span>Gallery</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
              <div class="breadcrumb-text">
                <h3>Gallery</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Breadcrumb Section End -->

      <!-----Carousel Section Starts-->
      <div class="container-fluid">
        <div class="row">
          {{-- <div
            id="carouselExampleInterval"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img
                  src="{{asset('frontend/img/slider/slide3.png')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img
                  src="{{asset('frontend/img/slider/slide2.png')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img
                  src="{{asset('frontend/img/slider/slide4.png')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img
                  src="{{asset('frontend/img/slider/slide5.png')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img
                  src="{{asset('frontend/img/slider/slide6.png')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleInterval"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleInterval"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> --}}

          <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('frontend/img/slider/slide3.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/img/slider/slide2.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/img/slider/slide4.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/img/slider/slide5.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/img/slider/slide6.png')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-----Carousel Section Ends---->

      <!-- Gallery Section Begin -->
      <section class="spad" style="background-color: #fcfcfc">
        <div class="container">
          <div class="sec-title">
            <span>AILFF GALLERY</span>
            <h2 class="text-dark">Celebrating Culture Through Film</h2>
          </div>
          <div class="row">
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery1.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 1"
              >
                <img src="{{asset('frontend/img/gallery/gallery1.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery2.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 2"
              >
                <img src="{{asset('frontend/img/gallery/gallery2.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery3.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 3"
              >
                <img src="{{asset('frontend/img/gallery/gallery3.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery4.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 4"
              >
                <img src="{{asset('frontend/img/gallery/gallery4.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery5.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 5"
              >
                <img src="{{asset('frontend/img/gallery/gallery5.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery6.jpg')}}"
                data-lightbox="photos"
                data-title="Gallery Image 6"
              >
                <img src="{{asset('frontend/img/gallery/gallery6.jpg')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery7.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 5"
              >
                <img src="{{asset('frontend/img/gallery/gallery7.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery8.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 5"
              >
                <img src="{{asset('frontend/img/gallery/gallery8.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4 gallery-item mb-5">
              <a
                href="{{asset('frontend/img/gallery/gallery9.png')}}"
                data-lightbox="photos"
                data-title="Gallery Image 5"
              >
                <img src="{{asset('frontend/img/gallery/gallery9.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Gallery Section End -->

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
