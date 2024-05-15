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
          <h1 class="mb-0 bread">Gallery Page</h1>
        </div>
      </div>
    </div>
</section>


<!-- Galary Section Start -->
<section class="ftco-section ftco-no-pt ftco-no-pb " style="margin: 0 0 100px 0;">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0002.jpg')}});">
                    <a href="{{ asset('public/frontend/images/dream/IMG-20240514-WA0002.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="#">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0001.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0002.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0003.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0004.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0005.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0006.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0007.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

{{--  custom--}}
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0009.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="#">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0010.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0011.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0012.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0013.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0014.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0015.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0016.jpg')}});">
                    <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="">Dream House</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>
<!-- Galary Section end -->

@endsection
