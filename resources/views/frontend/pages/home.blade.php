@extends('frontend.layout.template')

@push('meta-title')
    Reheb
@endpush

@section('body-content')

    <!-- Banner Section Start -->
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item"
                 style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0019.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                                <h1 class="mb-4">Welcome to Dream House Rehabilitation Center</h1>
                                <p>We offer a structured environment where individuals can receive medical,
                                    psychological, and therapeutic support to address their challenges and work towards
                                    recovery. </p>
                                <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item"
                 style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0008.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                                <h1 class="mb-4">Welcome to Dream House Rehabilitation Center</h1>
                                <p>We offer a structured environment where individuals can receive medical,
                                    psychological, and therapeutic support to address their challenges and work towards
                                    recovery.</p>
                                <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Service Section Start -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">We offer Services</span>
                    <h2>Our Treatments</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 services ftco-animate">

                    <div class="reheb_service_benefits d-block">
                        <div class="top_border"></div>
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-chiropractic"></span>
                        </div>

                        <div class="media-body px-2">
                            <h3 class="heading">Drug Testing </h3>
                            <p>Prerequisite to assess the drug abuse in prilimiry stage of drug addiction treatment. The treatment plan is designed on the basis of drug abuse.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>

                    <div class="reheb_service_benefits d-block">
                        <div class="top_border"></div>
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-bone"></span>
                        </div>

                        <div class="media-body px-2">
                            <h3 class="heading">Aftercare Treatment </h3>
                            <p>A continuing care is offered in a structured manner where a person enjoy the progress after completing a formal addiction treatment program. </p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>



                </div>


                <div class="col-md-4 services ftco-animate">
                    <div class="reheb_service_benefits d-block">
                        <div class="top_border"></div>
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-electrotherapy"></span>
                        </div>

                        <div class="media-body px-2">
                            <h3 class="heading">Inpatient Treatment </h3>
                            <p>Residential treatment programs at Dream House provide patients with a monitored, supportive environment for the duration of their recovery.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 services ftco-animate">
                    <div class="reheb_service_benefits d-block">
                        <div class="top_border"></div>
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-lymph-nodes"></span>
                        </div>

                        <div class="media-body px-2">
                            <h3 class="heading">Outpatient Treatment </h3>
                            <p>Outpatient programs at Dream House enable patients to continue working and commuting with their families during an inpatient stay in healthy process.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section end -->


    <!-- Team Section Start -->
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Team &amp; Staff</span>
                    <h2>Our Expert Doctors</h2>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{ asset('public/frontend/images/staff-1.jpg') }});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Lloyd Wilson</h3>
                            <span class="position mb-2">Chief Medical Officer</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{ asset('public/frontend/images/staff-2.jpg') }});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Rachel Parker</h3>
                            <span class="position mb-2">Chiropractor</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{ asset('public/frontend/images/staff-3.jpg') }});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Ian Smith</h3>
                            <span class="position mb-2">Clinical Chiropractic Assistant</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{ asset('public/frontend/images/staff-4.jpg') }});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Alicia Henderson</h3>
                            <span class="position mb-2">Licensed Massage Therapist</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg ftco-animate d-flex">
                    <div class="staff bg-primary">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{ asset('public/frontend/images/staff-5.jpg') }});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Lloyd Wilson</h3>
                            <span class="position mb-2">Front Desk Coordinator</span>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section end -->


    <!-- About Section Start -->
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0"
                         style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0014.jpg') }});">
                        <a href="https://vimeo.com/946532711"
                           class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pr-md-5 py-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome to Dream House</span>
                            <h2 class="mb-4">About Dream House</h2>
                            <p>We offer a structured environment where individuals can receive medical, psychological, and
                                therapeutic support to address their challenges and work towards recovery. Treatment
                                programs typically include detoxification, counseling, group therapy, education on
                                addiction and coping strategies, as well as aftercare planning to support long-term
                                sobriety and wellness. Rehab centers may specialize in treating specific types of
                                addictions or cater to a broader range of substance abuse issues.</p>
                        </div>
                    </div>
                    <div class="row ftco-counter pb-5" id="section-counter">
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4">0</strong>
                                </div>
                                <div class="text">
                                    <span>Years of <br>Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="153">0</strong>
                                </div>
                                <div class="text">
                                    <span>Happy <br>Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="2">0</strong>
                                </div>
                                <div class="text">
                                    <span>Award <br>Winning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end -->


    <!-- Success Story Section Start -->
    <section class="ftco-section testimony-section bg-dark">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2>Our Success Story</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('public/frontend/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('public/frontend/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('public/frontend/images/person_3.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('public/frontend/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('public/frontend/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Story Section end -->


    <!-- Galary Section Start -->
    <section class="ftco-section ftco-no-pt ftco-no-pb ">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                         style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0002.jpg')}});">
                        <a href="{{ asset('public/frontend/images/dream/IMG-20240514-WA0002.jpg')}}"
                           class="icon image-popup d-flex justify-content-center align-items-center">
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
                    <div class="work img d-flex align-items-center"
                         style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0001.jpg')}});">
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
                    <div class="work img d-flex align-items-center"
                         style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0002.jpg')}});">
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
                    <div class="work img d-flex align-items-center"
                         style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0003.jpg')}});">
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
                    <div class="work img d-flex align-items-center"
                         style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0004.jpg')}});">
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
                    <div class="work img d-flex align-items-center"
                         style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0005.jpg')}});">
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
                    <div class="work img d-flex align-items-center"
                         style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0006.jpg')}});">
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
                    <div class="work img d-flex align-items-center"
                         style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0007.jpg')}});">
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

    <!-- Appointment section Start -->
    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wrap-appointment d-md-flex">
                        <div class="col-md-8 bg-primary p-5 heading-section heading-section-white">
                            <span class="subheading">Booking an Appointment</span>
                            <h2 class="mb-4">Free Consultation</h2>
                            <form action="#" class="appointment">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Select Services</option>
                                                        <option value="">Spinal Manupulation</option>
                                                        <option value="">Electrotherapy</option>
                                                        <option value="">Manual Lymphatic</option>
                                                        <option value="">Medical Acupuncture</option>
                                                        <option value="">Therapeutic Exercise</option>
                                                        <option value="">Joint Mobilization</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Select Chiropractor</option>
                                                        <option value="">John Doe</option>
                                                        <option value="">William Smith</option>
                                                        <option value="">Danny Green</option>
                                                        <option value="">Jason Thompson</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                                <input type="text" class="form-control appointment_date"
                                                       placeholder="Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                <input type="text" class="form-control appointment_time"
                                                       placeholder="Time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="submit" value="Send message"
                                                   class="btn btn-secondary py-3 px-4">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 bg-white text-center p-5">
                            <div class="desc border-bottom pb-4">
                                <h2>Business Hours</h2>
                                <div class="opening-hours">
                                    <h4>Opening Days:</h4>
                                    <p class="pl-3">
                                        <span><strong>Monday – Friday:</strong> 9am to 20 pm</span>
                                        <span><strong>Saturday :</strong> 9am to 17 pm</span>
                                    </p>
                                    <h4>Vacations:</h4>
                                    <p class="pl-3">
                                        <span>All Sunday Days</span>
                                        <span>All Official Holidays</span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc pt-4 ">
                                <h3 class="heading">For Emergency Cases</h3>
                                <span class="phone">(+01) 123 456 7890</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment section end -->

    <!-- Blog section Start -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Latest news from our blog</h2>
                </div>
            </div>

            <div class="row d-flex">
                @foreach ( App\Models\Blog::where('status', 1)->orderBy('id', 'desc')->get(); as $blog )
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url({{ asset( $blog->img ) }}); width: 100%">
                            </a>
                            <div class="text mt-3">
                                <div class="posted mb-3 d-flex">
                                    <div class="img author"
                                        style="background-image: url({{ asset($blog->img) }});"></div>
                                    <div class="desc pl-3">
                                        <span>{{ $blog->posted_by }}</span>
                                        <span>{{ $blog->date }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{ route('single.blog', $blog->id) }}">{{ $blog->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog section end -->

@endsection


@push('scripts')
    <script>

    </script>
@endpush
