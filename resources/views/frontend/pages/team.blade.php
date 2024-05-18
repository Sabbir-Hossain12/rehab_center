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
          <h1 class="mb-0 bread">Our Team</h1>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Team &amp; Staff</span>
                <h2>Our Expert Team</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="staff bg-primary">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset('public/frontend/images/team/one.jpg') }});"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>S.A. Kokhon Sekh
                        </h3>
                        <span class="position mb-2">Director & Addiction Professional</span>
                        <div class="faded">
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="staff bg-primary">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset('public/frontend/images/team/two.jpg') }});"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Kamrun Nahar Sumi
                        </h3>
                        <span class="position mb-2">Consultant psychologist & Addiction professional</span>
                        <div class="faded">
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="staff bg-primary">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset('public/frontend/images/team/three.jpg') }});"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Tousif Munaz
                        </h3>
                        <span class="position mb-2"> Chief Programmer & Admin</span>
                        <div class="faded">
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="staff bg-primary">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset('public/frontend/images/team/four.jpg') }});"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Meharab Hasan</h3>
                        <span class="position mb-2">Medicine specialist</span>
                        <div class="faded">
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="staff bg-primary">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset('public/frontend/images/team/five.jpg') }});"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Shamsul Alam
                        </h3>
                        <span class="position mb-2">Psychiatrist</span>
                        <div class="faded">
{{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

@endsection
