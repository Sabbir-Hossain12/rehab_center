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
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Department Page</h1>
        </div>
      </div>
    </div>
</section>

<!-- Department section start -->
<section class="ftco-section">
    <div class="container">
        <div class="row dept align-items-center">
            <div class="col-md-6 pr-md-5">
                <h2>Drug Testing </h2>
                <p>Prerequisite to assess the drug abuse in prilimiry stage of drug addiction treatment. The treatment plan is designed on the basis of drug abuse.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
            <div class="col-md-6 img" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0014.jpg') }});"></div>
        </div>

        <div class="row dept align-items-center">
            <div class="col-md-6 pl-md-5 order-md-last">
                <h2>Inpatient Treatment </h2>
                <p>Residential treatment programs at Dream House provide patients with a monitored, supportive environment for the duration of their recovery.</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
            <div class="col-md-6 img" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0004.jpg') }});"></div>
        </div>

        <div class="row dept align-items-center">
            <div class="col-md-6 pr-md-5">
                <h2>Outpatient Treatment </h2>
                <p>Outpatient programs at Dream House enable patients to continue working and commuting with their families during an inpatient stay in healthy process.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
            <div class="col-md-6 img" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0019.jpg') }});"></div>
        </div>
    </div>
</section>
<!-- Department section end -->

@endsection
