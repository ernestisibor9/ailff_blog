<!-- Blog Section Begin -->
<div class="blog-section latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest Blog</span>
                    <h2>From Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($posts->isEmpty())
                <h3>Record not found</h3>
            @else
                @foreach ($posts as $key => $post)
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="{{ url('post/details/'  . $post->id . '/' . $post->post_slug) }}">
                                        <div class="bi-pic set-bg" data-setbg="{{ asset($post->post_image) }}"></div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bi-text">
                                        <ul>
                                            <li><i
                                                    class="fa fa-calendar-o"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                                            </li>
                                            <li><i class="fa fa-commenting-o"></i> 0</li>
                                        </ul>
                                        <a>
                                            <a
                                                href="{{ url('post/details/'. $post->id . '/' . $post->post_slug) }}" class="text-white">{{ $post->post_title }}</a>
                                        </h4>
                                        <p><a href="{{ url('post/details/'. $post->id . '/' . $post->post_slug) }}"
                                                class="text-white">Never ever think of giving up.
                                                Winners never quit and</a></p>
                                        <div class="bt-author">
                                            <div class="ba-pic">
                                                <img src="{{ asset('frontend/img/blog/author1.jpeg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="ba-text">
                                                <h5>Osezua Stephen-Imobhio</h5>
                                                <span>Author</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class="col-md-6">
              <div class="blog-item">
                <div class="row">
                  <div class="col-lg-6">
                    <div
                      class="bi-pic set-bg"
                      data-setbg="{{asset('frontend/img/blog/blog2.png')}}"
                    ></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="bi-text">
                      <ul>
                        <li><i class="fa fa-calendar-o"></i> August 9, 2019</li>
                        <li><i class="fa fa-commenting-o"></i> 0</li>
                      </ul>
                      <h4>
                        <a href="#"
                          >Everything Coming to Netflix Nigeria in May 2025</a
                        >
                      </h4>
                      <p>Never ever think of giving up. Winners never quit and</p>
                      <div class="bt-author">
                        <div class="ba-pic">
                          <img src="{{asset('frontend/img/blog/author1.jpeg')}}" alt="" />
                        </div>
                        <div class="ba-text">
                          <h5>Osezua Stephen-Imobhio</h5>
                          <span>Author</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Blog Section End -->
