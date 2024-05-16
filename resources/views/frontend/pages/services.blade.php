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
          <h1 class="mb-0 bread">Service Page</h1>
        </div>
      </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Services</span>
                <h2 class="mb-4">Why Choose Us?</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>

        <div class="row tabulation mt-4 ftco-animate fadeInUp ftco-animated">
       
            <div class="col-6">
                
                <img src="{{asset('public/frontend/images/dream/IMG-20240514-WA0021.jpg')}}" class="img-fluid" style="width: 700px"/>
               
            </div>
            <div class="col-6">

                <img src="{{asset('public/frontend/images/dream/IMG-20240514-WA0022.jpg')}}" class="img-fluid" style="width: 700px"/>

            </div>
         
            
        </div>
    </div>
</section>

@endsection
