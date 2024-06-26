@extends('frontend.layout.template')



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

            @foreach($images as $image)
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url({{ asset($image->img_path)}});">
                </div>
            </div>
            @endforeach







        </div>
    </div>
</section>
<!-- Galary Section end -->

@endsection
