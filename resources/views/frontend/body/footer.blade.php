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

   <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="footer-option">
                <div class="fo-logo">
                  <a href="#">
                    <img src="{{asset('frontend/img/logo2.png')}}" alt="" />
                  </a>
                </div>
                <ul>
                  <li>Address: 60, Mowe-Ibafo, Ogun State</li>
                  <li>Phone: +234 802 314 1942</li>
                  <li>Email: ailfffilmfestival@gmail.com</li>
                </ul>
                <div class="fo-social">
                  <a href="https://www.facebook.com/osezua.stephenimobhio.94" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="https://wa.me/2348023141942" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-widget fw-links">
                <h5>Useful Links</h5>
                <ul>
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ route('about') }}">About Us</a></li>
                  <li><a href="{{ route('gallery') }}">Gallery</a></li>
                  <li><a href="https://festivals.festhome.com/login">Film Submission</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                  <li><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                <h5>Join The Newsletter</h5>
                <p>
                  Get E-mail updates about our latest shop and special offers.
                </p>
                <form action="#" class="news-form">
                  <input type="text" placeholder="Enter your mail" />
                  <button type="submit">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                <h5>Place Your Adverts</h5>
                <div class="insta-pic">
                    <div class="ads-block" style="background-color: #586AC3;">
                        <div class="text-center">
                            <a href="">
                                <h1 class="text-white">ADVERTISE</h1>
                                <h1 class="text-white">HERE</h1>
                                <h5 class="text-white">Contact Us Now</h5>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright-text">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              African Indigenous Language Film Festival. All Rights Reserved.
            </p>
          </div>
        </div>
      </section>
      <!-- Footer Section End -->
