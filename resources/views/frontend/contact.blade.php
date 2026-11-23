@extends('frontend.master')

@section('home')

@section('title')
    AILFF - Contact Us Page
@endsection

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

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

<style>
    .social-icons {
        text-align: center;
        margin-top: 20px;
    }

    .social-icons a {
        display: inline-block;
        margin: 0 10px;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        border-radius: 50%;
        font-size: 24px;
        color: #fff;
        background-color: #333;
        transition: 0.3s ease-in-out;
    }

    .social-icons a:hover {
        transform: scale(1.2);
    }

    .social-icons a:nth-child(1) {
        background-color: #1877f2;
    }

    /* Facebook */
    .social-icons a:nth-child(2) {
        background-color: #1da1f2;
    }

    /* Twitter */
    .social-icons a:nth-child(3) {
        background-color: #e4405f;
    }

    /* Instagram */
    /* .social-icons a:nth-child(4) {
        background-color: #0077b5;
    } */

    .social-icons a:nth-child(4) {
    background-color: #25D366; /* WhatsApp Green */
}


    /* LinkedIn */
    .social-icons a:nth-child(5) {
        background-color: #ff0000;
    }

    /* YouTube */
</style>

<style>
    .contact-info {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-item {
    display: flex;
    align-items: center;
    margin: 15px 0;
    font-size: 18px;
}

.contact-item i {
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    background: #007bff;
    color: white;
    margin-right: 15px;
    font-size: 20px;
}

.contact-item a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: 0.3s;
}

.contact-item a:hover {
    color: #007bff;
}
iframe{
    height: 55vh !important;
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
                        <span>Contact Us</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Contact Us</h3>
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
                <div class="col-md-8 mb-4">
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1169368615797!2d3.3569234!3d6.6323961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93eaf34355a3%3A0x595bd39bb0a9f36c!2sJide%20Ayo%20Cl%2C%20Omole%20Phase%201%2C%20Ojodu%2FAgidingbi%2FOmole%20101233%2C%20Lagos!5e0!3m2!1sen!2sng!4v1742019320919!5m2!1sen!2sng" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/osezua.stephenimobhio.94" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        {{-- <a href="#" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a> --}}
                        <a href="https://wa.me/2348023141942" target="_blank" >
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <a href="https://www.youtube.com/yourchannel" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jide Ayo close, Lagos, Nigeria</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+1234567890">+1 234 567 890</a>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/1234567890" target="_blank">+1 234 567 890</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:your@email.com">ailfffilmfestival@gmail.com</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-globe"></i>
                            <a href="https://www.yourwebsite.com" target="_blank">https://www.ailff.com</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

@endsection
