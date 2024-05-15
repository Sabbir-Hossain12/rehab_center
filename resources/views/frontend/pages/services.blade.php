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
            <div class="col-md-4">
                <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                    <li class="nav-item text-left">
                    <a class="nav-link py-4 show" data-toggle="tab" href="#services-1"><span class="flaticon-chiropractic mr-2"></span> Spinal Manupulation</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4 show" data-toggle="tab" href="#services-2"><span class="flaticon-electrotherapy mr-2"></span> Electrotherapy</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4 show" data-toggle="tab" href="#services-3"><span class="flaticon-lymph-nodes mr-2"></span> Manual Lympahtic</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4 show" data-toggle="tab" href="#services-4"><span class="flaticon-acupuncture mr-2"></span> Medical Acupuncture</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4 show" data-toggle="tab" href="#services-5"><span class="flaticon-examination mr-2"></span> Therapeutic Exercise</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4 show active" data-toggle="tab" href="#services-6"><span class="flaticon-bone mr-2"></span> Joint Mobilization</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane container p-0 show" id="services-1">
                        <div class="img" style="background-image: url({{ asset('public/frontend/images/work-2.jpg') }});"></div>
                        <h3><a href="#">Spinal Manupulation</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-2">
                        <div class="img" style="background-image: url({{ asset('public/frontend/images/work-3.jpg') }});"></div>
                        <h3><a href="#">Electrotherapy</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-3">
                        <div class="img" style="background-image: url({{ asset('public/frontend/images/work-4.jpg') }});"></div>
                        <h3><a href="#">Manual Lymphatic</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-4">
                        <div class="img" style="background-image: url({{ asset('public/frontend/images/work-5.jpg') }});"></div>
                        <h3><a href="#">Medical Acupuncture</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-5">
                        <div class="img" style="background-image: url({{ asset('public/frontend/images/work-6.jpg') }});"></div>
                        <h3><a href="#">Therapeutic Exercise</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane container p-0 fade active show" id="services-6">
                        <div class="img" style="background-image: url({{ asset('public/frontend/images/work-1.jpg') }});"></div>
                        <h3><a href="#">Joint Mobilization</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
