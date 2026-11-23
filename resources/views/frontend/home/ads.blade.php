<style>
    .ads-block{
        width: 300px;
        height: 190px;
        object-fit: cover;
        transition: transform 0.3s ease;
        padding-top: 30px;
        margin-bottom: 20px
    }
    .ads-block h1{
        font-size: 3rem;
    }
</style>


<h2 class="text-center" style="font-weight: bold;">Contact Us Now For Your Adverts Placement</h2>
   <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <a href="https://www.holoceneinnovations.com" target="_blank">
                    <img src="{{asset('frontend/img/h-banner.jpg')}}" alt="">
                </a>
                <a href="http://www.nextgentv.tv" target="_blank">
                    <img src="{{asset('frontend/img/nextgen.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://www.linktr.ee/ibstmedia" target="_blank">
                    <img src="{{asset('frontend/img/ibst.jpg')}}" alt="">
                </a>
                <a href="http://www.nextgentv.tv" target="_blank">
                    <img src="{{asset('frontend/img/nextgen.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://www.highwayav.com/" target="_blank">
                    <img src="{{asset('frontend/img/highway.jpg')}}" alt="" class="img-fluid">
                </a>
                <div class="ads-block" style="background-color: #586AC3;">
                    <div class="text-center">
                        <a href="{{route('adverts')}}">
                            <h1 class="text-white">ADVERTISE</h1>
                            <h1 class="text-white">HERE</h1>
                            <h5 class="text-white">Contact Us Now</h5>
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Us Section End -->
