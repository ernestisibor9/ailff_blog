{{-- <a href="{{route('adverts')}}">
    <img src="{{asset('frontend/img/advert-head.png')}}" alt="">
</a> --}}
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <!-- <img src="img/logo2.png" alt="">   -->
                <div id="logo-div">
                    <span class="ailff-logo1">a</span>
                    <span class="ailff-logo2">i</span>
                    <span class="ailff-logo3">l</span>
                    <span class="ailff-logo4">f</span>
                    <span class="ailff-logo5">f</span>
                </div>
                <!-- <div class="logo">
                      <a href="#">
                          <img src="img/logo2.png" alt="">
                          <span class="ailff-logo1">a</span>
                          <span class="ailff-logo2">i</span>
                          <span class="ailff-logo3">l</span>
                          <span class="ailff-logo4">f</span>
                          <span class="ailff-logo5">f</span>
                      </a>
                  </div> -->
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="main-menu mobile-menu">

                    <ul>
                        <li class="{{ request()->routeIs('home') || request()->is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
                        </li>

                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}" class="text-decoration-none">About Us</a>
                        </li>

                        <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                            <a href="{{ route('gallery') }}" class="text-decoration-none">Gallery</a>
                        </li>

                        <li>
                            <a href="https://festivals.festhome.com/login">Film Submissions</a>
                        </li>

                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="text-decoration-none">Contact</a>
                        </li>

                        <li class="{{ request()->routeIs('blog') || request()->routeIs('blog.*') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}" class="text-decoration-none">Blog</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
