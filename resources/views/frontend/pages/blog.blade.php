@extends('frontend.layout.template')

@push('meta-title')
    Reheb
@endpush

@section('body-content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0008.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Blog Page</h1>
        </div>
      </div>
    </div>
</section>

<!-- Blog Post section start -->
<section class="ftco-section">
    <div class="container">
      <div class="row">

        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('public/frontend/images/image_1.jpg') }});">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{ asset('public/frontend/images/image_2.jpg') }});"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
              <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('public/frontend/images/image_2.jpg') }});">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{ asset('public/frontend/images/image_3.jpg') }});"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
              <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('public/frontend/images/image_3.jpg') }});">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{ asset('public/frontend/images/image_1.jpg') }});"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
              <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('public/frontend/images/image_5.jpg') }});">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{ asset('public/frontend/images/image_2.jpg') }});"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
              <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('public/frontend/images/image_4.jpg') }});">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{ asset('public/frontend/images/image_3.jpg') }});"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
              <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('public/frontend/images/image_6.jpg') }});">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url({{ asset('public/frontend/images/image_1.jpg') }});"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
              <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
    </div>
</section>
<!-- Blog Post section end -->

@endsection
