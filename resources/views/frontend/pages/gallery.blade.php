@extends('frontend.layout.template')

@push('meta-title')
    Reheb
@endpush

@section('body-content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('public/frontend/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
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
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-1.jpg') }});">
                    <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Foot Pain</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-2.jpg') }});">
                    <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Arm Pain</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-3.jpg') }});">
                    <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Shoulder Pain</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-4.jpg') }});">
                    <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Back Pain</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-5.jpg') }});">
                    <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Head &amp; Migraines</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-6.jpg') }});">
                    <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Wear &amp; Tear</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-7.jpg') }});">
                    <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Arm Pain</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/work-8.jpg') }});">
                    <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2><a href="work-single.html">Lower Back Pain</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Galary Section end -->

@endsection
