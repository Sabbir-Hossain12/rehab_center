@extends('frontend.layout.template')



@section('body-content')

    <!-- Banner Section Start -->
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">

            @foreach($sliders as $slider)
                <div class="slider-item"
                     style="background-image:url({{ asset($slider->slider_img) }}); ">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-end">
                            <div class="col-md-6 ftco-animate">
                                <div class="text w-100">
                                    <h1 class="mb-4">{{$slider->slider_title}}</h1>
                                    {!! $slider->slider_desc !!}
                                    <p><a href="{{route('contact')}}" class="btn btn-primary">Contact Us</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- About Section Start -->
    <section class="ftco-section ftco-no-pt ftco-no-pb px-3">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0"
                         style="background-image:url({{ asset($about->side_img) }});">
                        <a href="{{$about->img_link}}"
                           class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pr-md-5 py-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome to Dream House</span>
                            <h2 class="mb-4">{{$about->title}}</h2>
                            <p>{{$about->text_1}}</p>
                            <p>{{$about->text_2}}</p>
                            <div class="service_description">
                                {!! $about->text_3 !!}
                            </div>
                        </div>
                    </div>

                    <div class="row ftco-counter lg-pb-5 pb-0" id="section-counter">
                        <div class="col-6 col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate counter_data">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$about->years}}">0</strong>
                                </div>
                                <div class="text">
                                    <span>Years of <br>Experienced</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate counter_data">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$about->customers}}">0</strong>
                                </div>
                                <div class="text">
                                    <span>Happy <br>Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end -->


    <!-- why chose us? Start -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">{{$choose->title_1}}</h2>
                </div>
            </div>

            <div class="row tabulation mt-4 ftco-animate fadeInUp ftco-animated">
                <div class="col-md-6 d-flex order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0"
                         style="background-image:url({{ asset($choose->img_1) }});">
                    </div>
                </div>

                <div class="col-md-6 pr-md-5 py-md-5">
                    <div class="row justify-content-start pb-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">{{$choose->title_2}}</h2>
                            <p style="font-size: 16px; margin: 0;">{{$choose->text_1}}</p>
                        </div>
                    </div>

                    <div class="service_description">
                        {!! $choose->text_2 !!}
                    </div>
                </div>
            </div>

            <div class="drug_addic_details" style="">
                <h5 style="font-size: 17px; margin: 0; "><strong>{{$choose->title_3}}</strong>
                </h5>
                <p style="font-size: 17px; margin-top: 20px;">{{$choose->text_3}}</p>
                <h5>{{$choose->title_4}}</h5>
                <div class="service_description">
                    {!! $choose->text_4 !!}
                </div>

                <div class="service_description py-4">
                    <h5>{{$choose->title_5}}</h5>

                    {!! $choose->text_5 !!}
                </div>

                <div class="row px-3 best_rehebs">
                    <div class="col-12 sm-w-50">
                        <div class="overlay text-center py-2">
                            <img src="{{asset($choose->img_2)}}" class="shadow-lg rounded text-center reheb_center_consultancy" alt="Dream House">
                        </div>
                    </div>
                    <h2 class="text-center text-success pt-2">Best Rehab Center in Bangladesh</h2>
                    <p class="lh-base fs-5 fw-normal">{{$choose->text_6}}</p>
                </div>
            </div>

        </div>
    </section>
    <!-- why chose us? End -->


    <!-- Treatment Section Start -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">We offer Services</span>
                    <h2>Our Treatments</h2>
                </div>
            </div>
            <div class="row">
                @foreach($treatments as $treatment) 
                <div class="col-md-4 services ftco-animate">

                    <div class="reheb_service_benefits d-block">
                        <div class="top_border"></div>
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="{{ asset($treatment->treat_img) }}" alt="" style="width: 40px;">
                        </div>

                        <div class="media-body px-2">
                            <h3 class="heading">{{$treatment->treat_title}} </h3>
                            <p>{{$treatment->treat_desc}}</p>
                            {{-- <p><a href="#" class="btn-custom">Read more</a></p> --}}
                        </div>
                    </div>

                   
                </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- Service Section end -->


    <!-- Pricing Section Start -->
    <section class="pricing_section">
        <div class="container">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <span class="subheading">Packages</span>
                    <h2>Pricing Plan</h2>
                </div>
            </div>

            <div class="row">
                <div class="pricing_plan_container">
                    @foreach($packages as $pack)
                        <div class="card_container">
                            <div class="card_details">
                                <div class="card_title">
                                    <h3>{{$pack->pack_name}}</h3>
                                    <div class="pricing">
                                        ৳<span> {{$pack->pack_price}} / Per Months</span>
                                    </div>
                                    <p style="color: green;">Duration: {{$pack->duration}}</p>
                                </div>
                            </div>

                            <div class="card_price_description">
                                <ul>
                                    {!! $pack->content !!}
                                </ul>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section end -->


    <!-- package Section start -->
    <section style="margin-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="package_section border_r">
                        <h3>The Package Values <span style="color: #e0452f">INCLUDE</span> the services stated below:
                        </h3>

                        <ol class="package_list">
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Room Charges and Food</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Dope test and drug assessment during admission</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Detoxification, if required</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Medical treatment, Nursing and Supervision of skilled attendants</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Individual Counseling Sessions</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Group therapy session by Addiction Counselors & Psychologists</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Yoga & Meditation</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Attending NA meeting weekly</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Weekly outing program to theme parks</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Weekly Support Group Program</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Family counseling sessions as required</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i> Religious spiritual lecture program monthly</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="package_section">
                        <h3>Other Charges <span style="color: #e0452f">EXCLUDING </span> stated below: the Package
                            Value:</h3>

                        <ol class="package_list">
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  All necessary diagnostic charges</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Medicines & medical items</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Specialized medical consultancy</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Breakage of any property of Dream House</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Special ambulatory service charge depending on team & time involved, transport cost
                            </li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Cost of escorting, if required</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Necessary Dope test</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Personal laundry salon services, etc.</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Personal extra expense</li>
                            <li><i class="fa fa-long-arrow-right text-success me-2" aria-hidden="true"></i>  Service charge @10 of package value</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <p style="color: gray; font-weight: 900; font-size: 17px; text-align: center; margin-top: 80px">
                    <i class="fa fa-quote-left text-dark me-3" style="font-size: 30px;" aria-hidden="true"></i>If the patient is discharged from the center before the due
                    date, Guardian must have to pay the full amount of the contract." Dream House the treatment support
                    and rehabilitation center for addicts We provide treatment for Drug Addiction and Addiction related
                    mental disorders.  <i class="fa fa-quote-right text-dark ms-3" style="font-size: 30px;" aria-hidden="true"></i></p>
            </div>
        </div>
    </section>
    <!-- package Section end -->


    <!-- Team Section Start -->
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Team &amp; Staff</span>
                    <h2>Our Expert Team</h2>
                </div>
            </div>

            <div class="row no-gutters">
                @foreach($teams as $team)
                    <div class="col-md-4 col-lg ftco-animate d-flex">
                        <div class="staff bg-primary">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch"
                                     style="background-image: url({{ asset($team->team_img) }});"></div>
                            </div>
                            <div class="text pt-3 px-3 pb-4 text-center">
                                <h3>{{$team->team_name}}</h3>
                                <span class="position mb-2">{{$team->designation}}</span>
                                <div class="faded">
                                    <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section end -->



    <!-- Success Story Section Start -->
    @if ( $testimonials->count() > 0 )
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
                           @foreach ($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-quote-left"></span>
                                    </div>

                                    <div class="text">
                                        <p class="mb-4">{{ $testimonial->description }}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url( {{ asset($testimonial->img)}} )"></div>
                                            <div class="pl-3">
                                                <p class="name">{{ $testimonial->name }}</p>
                                                <span class="position">{{ $testimonial->address }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Success Story Section end -->


    <!-- Galary Section Start -->
    <section class="ftco-section ftco-no-pt ftco-no-pb ">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                @foreach($images as $image)
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-center"
                             style="background-image: url({{ asset($image->img_path)}});">
                            {{-- <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                            <div class="desc w-100 px-4 text-center pt-5 mt-5">
                                <div class="text w-100 mb-3 mt-4">
                                    <h2><a href="#">{{$image->title}}</a></h2>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container" style="color: gray; font-weight: 900; font-size: 17px; text-align: center; margin-top: 60px;">
            <div class="row">
                <div class="col-lg-12">
                   <p><i class="fa fa-quote-left text-dark me-3" style="font-size: 30px;" aria-hidden="true"></i> Our excessive facility features beautifully landscaped gardens, surrounded by trees, a swimming pool, and a dedicated fish farming area. We also offer various outdoor recreational activities. Spanning 153 acres, our center provides unmatched amenities compared to other rehab centers in Bangladesh. For enhanced security, the property is enclosed by a 20-foot wall. <i class="fa fa-quote-right text-dark ms-3" style="font-size: 30px;" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Galary Section end -->


    <!-- Blog section Start -->
    <section class="pt-5">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Latest news from our blog</h2>
                </div>
            </div>

            <div class="row d-flex">
                @foreach ( App\Models\Blog::where('status', 1)->orderBy('id', 'desc')->limit(6)->get(); as $blog )
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('single.blog', $blog->id) }}" class="block-20 rounded"
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
                                <h3 class="heading"><a
                                            href="{{ route('single.blog', $blog->id) }}">{{ $blog->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog section end -->


    <!--  Some Logo Starts  -->
    <section class="ftco-section testimony-section bg-dark">
        <div class="container">

            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="govt-logo owl-carousel ftco-owl">
                        @foreach($logos as $logo) 
                        <div class="item">
                            <div class="testimony-wrap py-4 d-flex justify-content-center align-items-center">
                                <img class="text-center" src="{{ asset($logo->logo_img)}}"
                                     style="width: 220px" alt="logo"/>
                            </div>
                        </div>
                        @endforeach
                            
                        
                  

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Some Logo Ends -->


    <!-- Map and Contact us Starts   -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.933074527766!2d90.31139729204881!3d23.962806616765565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755dddc6cfd7809%3A0x76b815e053637a4d!2sDream%20house%20rehabilitation%20Center!5e0!3m2!1sen!2sbd!4v1716204023332!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>

                                    <form method="POST" action="http://localhost/rehab_center/admin/contact-us"
                                          id="contactForm" class="contactForm">
                                        <input type="hidden" name="_token"
                                               value="riZQkbFtUmSu5ZE4rBUtojICMxDhWUpNe4ZAiVvC" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                           placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                              rows="7" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                    <h3 class="mb-4 mt-md-4">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span>{{$basic->address}}</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel://1234567920">{{$basic->phone_1}}
                                                    , {{$basic->phone_2}}</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a href="">{{$basic->email}}</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website</span> <a href="#">{{$basic->website}}</a></p>
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
    <!-- Map and Contact us Ends   -->

@endsection


@push('scripts')
    <script>
		$('.carousel-testimony').owlCarousel({
			center: false,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: {{ min($testimonials->count(), 3) }}
				}
			}
		});
    </script>
@endpush
