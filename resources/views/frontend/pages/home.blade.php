@extends('frontend.layout.template')

@push('meta-title')
    Reheb
@endpush

@section('body-content')

    <!-- Banner Section Start -->
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            
            @foreach($sliders as $slider) 
            <div class="slider-item"
                 style="background-image:url({{ asset($slider->slider_img) }});">
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
                            <p>*Authorized & Accredited by Govt Drug Addiction Rehab Center in Kashimpur, Gazipur.</p>
                            <p>We are an Authorized and Best Addiction Treatment Center in Kashimpur,Gazipur,Bangladesh. Dream House Drug Addiction Rehab is a Unique in Above Treatments for the Following reasons:</p>
                            <div class="service_description">
                            <ul class="list-unstyled">
                                <li class="">
                                    <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Say no to Drugs.
                                </li>
                                <li class="">
                                    <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Painless Detoxitication.
                                </li>
                                <li class="">
                                    <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Expert Professional Team.(Psychiatrist, psychologist, Addiction Counsellor, Addiction Professional,General Physician etc)
                                </li>
                                <li class="">
                                    <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Individual/Multidisciplinie Treatment Approach.
                                </li>
                                <li class="">
                                    <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Help to Overcome your Drug Addiction & return to a healthy life.
                                </li>
                                <li class="">
                                    <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Extreme good after care Programme.
                                </li>
                            </ul>
                            </div>
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

    
    {{--why chose us? Start--}}

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">Why Choose Us?</h2>
                </div>
            </div>

            <div class="row tabulation mt-4 ftco-animate fadeInUp ftco-animated">
                <div class="col-md-6 d-flex order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0"
                         style="background-image:url({{ asset('public/frontend/images/dream/new/IMG-20240521-WA0012.jpg') }});">
                    </div>
                </div>

                <div class="col-md-6 pr-md-5 py-md-5">
                    <div class="row justify-content-start pb-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Rehab Center in Dhaka, Bangladesh: Your Path to Recovery from Drug Addiction</h2>
                            <p style="font-size: 16px; margin: 0;">Dream House Rehabilitation center offer a structured environment where individuals can receive medical, psychological,
                                and
                                therapeutic support to address their challenges and work towards recovery. Treatment
                                programs typically include detoxification, counseling, group therapy, education on
                                addiction and coping strategies, as well as aftercare planning to support long-term
                                sobriety and wellness. Rehab centers may specialize in treating specific types of
                                addictions or cater to a broader range of substance abuse issues.</p>
                        </div>
                    </div>

                    <div class="service_description">
                        <ul>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Room charges & food
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Basic medical advice, nursing and supervision of skilled attendents.
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Individual counseling sessions.
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Yoga & Meditation.
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Attending N/A meeting weekly.
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Outing and recreational programs.
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Weekly support group program.
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Physical excercise & training by gym instructor.
                            </li>
                            <li class="service_list">
                                <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i> Religious spiritual lecture program.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- services Section end -->

            <div class="drug_addic_details" style="">
                <h5 style="font-size: 17px; margin: 0; "><strong>Understanding Drug Addiction in Bangladesh:</strong></h5>
                <p style="text-indent: 15%; font-size: 17px; margin-top: 20px;">------ Drug addiction, also known as substance use disorder, is a chronic disease characterized by companies drug-seeking and use, despite harmful consequences. In Bangladesh, drug addiction has become a major issue, affecting indeviduals from all walks of life.It is crucial to have a comprehensive understanding of this problem in  order to address it effectively.

                </p>

                <h5>Commonly Abused Drugs</h5>
                <div class="service_description">
                    <ul>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Yaba:</strong>  A methamphetamine-based drug, often referred to as "crazy medicine," is widely abused in Bangladesh. It is smuggled primarily from Myanmar and has become a significant problem due to its affordability and availability.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Heroin:</strong>  Heroin abuse remains prevalent, particularly in urban areas. It is often imported from neighboring countries through illegal channels.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Phensedyl:</strong>  A codeine-based cough syrup, Phensedyl is frequently abused, especially in border areas. Despite being banned, it is smuggled from India and consumed for its psychoactive effects.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Cannabis:</strong>  Locally known as "ganja," cannabis is widely used across different social strata. It is cultivated locally and also smuggled into the country.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Other Prescription Drugs:</strong>  Abuse of prescription drugs like diazepam and tramadol is also on the rise, often obtained without proper medical prescriptions.
                        </li>




                    </ul>
                </div>

                <div class="service_description py-4">
                    <h5>Causes of Drug Addiction</h5>

                    <ul>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Socio-Economic Factors:</strong>  Poverty, unemployment, and lack of education are significant drivers of drug abuse. Many individuals, particularly the youth, turn to drugs as a coping mechanism for their socio-economic challenges.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Peer Pressure:</strong>  Peer influence is a critical factor, especially among teenagers and young adults. The desire to fit in or gain social acceptance can lead individuals to experiment with drugs.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Mental Health Issues:</strong>  Anxiety, depression, and other mental health disorders can lead individuals to self-medicate with drugs, exacerbating the addiction problem.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Availability and Accessibility:</strong>  The porous borders with neighboring countries facilitate the easy smuggling of drugs, making them readily available and accessible.
                        </li>
                        <li class="service_list">
                            <i class="fa fa-long-arrow-right text-success" aria-hidden="true"></i>   <strong>Lack of Awareness</strong>  Limited awareness and education about the dangers of drug abuse contribute to the growing addiction problem. Many people are unaware of the long-term consequences of drug use.
                        </li>




                    </ul>
                </div>
{{--      Image           --}}
                <div class="overlay text-center py-2">
                <img src="{{asset('public/frontend/images/dream/new/IMG-20240521-WA0010.jpg')}}" class="shadow-lg rounded text-center img-fluid" style="height: 500px; width: 70%" alt="Dream House">
                </div>
               <h2 class="text-center text-success pt-2">Best Rehab Center in Bangladesh</h2>
                <p class="lh-base fs-5 fw-normal">Dream Rehabilitation Center is known as the “Best Rehab Center in Dhaka, Bangladesh.” Dream House provides caring and effective care to people who are trying to heal from drug abuse. Our skilled and dedicated staff is committed to giving the best recovery services in Dhaka. We make custom treatment plans a top priority as the “Best Rehab Center in Dhaka” to make sure that each person gets the help they need on their way to recovery. Our all-around method at Omega Point Rehabilitation Center treats the physical, emotional, and mental parts of addiction. Our building has all the latest features, which creates a safe and healing space for people to heal and change. Omega Point is known as the Best Rehab Center in Dhaka because it offers therapies, counseling, and holistic wellness programs that are all based on scientific proof and are meant to help people stay clean. You are choosing the Best Rehab Center in Dhaka when you choose Omega Point Rehabilitation Center. The community there is ready to help people get clean and live a life without drugs. Omega Points has a reputation as the Best Rehab Center in Dhaka because we are committed to providing the highest level of care for people who are trying to get better. </p>
            </div>

        </div>
    </section>

    {{--why chose us? End--}}
    
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
                            <p>Prerequisite to assess the drug abuse in prilimiry stage of drug addiction treatment. The
                                treatment plan is designed on the basis of drug abuse.</p>
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
                            <p>A continuing care is offered in a structured manner where a person enjoy the progress
                                after completing a formal addiction treatment program. </p>
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
                            <p>Residential treatment programs at Dream House provide patients with a monitored,
                                supportive environment for the duration of their recovery.</p>
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
                            <p>Outpatient programs at Dream House enable patients to continue working and commuting with
                                their families during an inpatient stay in healthy process.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
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
                                    ৳<span> {{$pack->pack_price}} / BDT</span>
                                </div>
                                <p>{{$pack->duration}}</p>
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
                        <h3>The Package Values <span style="color: #e0452f">INCLUDE</span> the services stated below:</h3>

                        <ol class="package_list">
                            <li>1. Room Charges and Food</li>
                            <li>2. Dope test and drug assessment during admission</li>
                            <li>3. Detoxification, if required</li>
                            <li>4. Medical treatment, Nursing and Supervision of skilled attendants</li>
                            <li>5. Individual Counseling Sessions</li>
                            <li>6. Group therapy session by Addiction Counselors & Psychologists</li>
                            <li>7. Yoga & Meditation</li>
                            <li>8. Attending NA meeting weekly</li>
                            <li>9. Weekly outing program to theme parks</li>
                            <li>10. Weekly Support Group Program</li>
                            <li>11. Family counseling sessions as required</li>
                            <li>12. Religious spiritual lecture program monthly</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="package_section">
                        <h3>Other Charges <span style="color: #e0452f">EXCLUDING </span> stated below: the Package Value:</h3>

                        <ol class="package_list">
                            <li>1. All necessary diagnostic charges</li>
                            <li>2. Medicines & medical items</li>
                            <li>3. Specialized medical consultancy</li>
                            <li>4. Breakage of any property of OmegaPoint</li>
                            <li>5. Special ambulatory service charge depending on team & time involved, transport cost</li>
                            <li>6. Cost of escorting, if required</li>
                            <li>7. Necessary Dope test</li>
                            <li>8. Personal laundry salon services, etc.</li>
                            <li>9. Personal extra expense</li>
                            <li>10. Service charge @10 of package value</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <p style="color: #000; font-weight: 900; font-size: 20px; text-align: center; margin-top: 80px" ><span style="color: #e0452f">*</span>If the patient is discharged from the center before the due date, Guardian must have to pay the full amount of the contract." Dream House the treatment support and rehabilitation center for addicts We provide treatment for Drug Addiction and Addiction related mental disorders.<span style="color: #e0452f">*</span></p>
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
                                    <p class="mb-4">ড্রিম হাউসে আসা আমার জীবনের সেরা সিদ্ধান্ত ছিল। সুবিধাটি
                                        শীর্ষস্থানীয়, এবং স্টাফ প্রত্যেক ব্যক্তির পুনরুদ্ধার সম্পর্কে সত্যিই যত্নশীল।
                                        থেরাপি সেশন এবং সামগ্রিক কার্যক্রম আমাকে আমার জীবনের নিয়ন্ত্রণ পুনরুদ্ধার করতে
                                        সহায়তা করেছে। আমি আমার দ্বিতীয় সুযোগের জন্য কৃতজ্ঞ এবং এই নতুন অধ্যায়টি শুরু
                                        করার জন্য উচ্ছ্বসিত।</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('public/frontend/images/testimonies/one.webp')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Abdur Kader</p>
                                            <span class="position">Mirpur,Dhaka</span>
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
                                    <p class="mb-4">Coming to Dream House was the best decision I ever made. The
                                        facility is top-notch, and the staff genuinely cares about each individual's
                                        recovery. The therapy sessions and holistic activities helped me regain control
                                        of my life. I’m grateful for the second chance I’ve been given and am excited to
                                        start this new chapter</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('public/frontend/images/testimonies/two.webp')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Nazmul Hasan</p>
                                            <span class="position">Gazipur</span>
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
                                    <p class="mb-4">ড্রিম হাউস আমার জীবনের রক্ষাকর্তা হয়েছে। যখন আমি প্রথম এখানে আসি,
                                        তখন আমি জীবনের নিম্নতম অবস্থানে ছিলাম, কিন্তু সহানুভূতিশীল স্টাফ এবং ব্যাপক
                                        প্রোগ্রামগুলি আমাকে সুস্থতার পথে ফিরিয়ে এনেছে। এখানে সকলের সমর্থন
                                        অসাধারণ, এবং আমি চমৎকার বন্ধু তৈরি করেছি। আমি নতুন উদ্দীপনা এবং ভবিষ্যতের
                                        জন্য আশাবাদ নিয়ে যাচ্ছি।</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('public/frontend/images/testimonies/three.avif')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Alom Al Khokon</p>
                                            <span class="position">Savar</span>
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
                                    <p class="mb-4">ড্রিম হাউস আমাকে জীবনে ফিরে আসার একটি সুযোগ দিয়েছে। যখন আমি এখানে
                                        আসি, তখন আমি সম্পূর্ণভাবে ভেঙে পড়েছিলাম। কিন্তু স্টাফদের সহানুভূতি এবং
                                        প্রফেশনালিজম আমাকে পুনরায় আমার পথ খুঁজে পেতে সাহায্য করেছে। তাদের ধৈর্য এবং
                                        সমর্থন ছাড়া আমি এই দূরত্বে আসতে পারতাম না। আমি
                                        জীবনের প্রতি নতুন উদ্দীপনা পেয়েছি।</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('public/frontend/images/testimonies/four.webp')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Himel Hossain</p>
                                            <span class="position">Gazipur</span>
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
                                    <p class="mb-4">My time at Dream House has been transformative. The personalized
                                        care and attention to detail in the treatment plans really set this place apart.
                                        I felt heard and understood, which made all the difference in my recovery
                                        journey. I’m now looking forward to a bright and sober future, thanks to the
                                        incredible team at Dream House</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('public/frontend/images/testimonies/four.webp')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Azad Mahmood</p>
                                            <span class="position">Tongi</span>
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
                @foreach($images as $image)
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-center"
                             style="background-image: url({{ asset($image->img_path)}});">
                            <a href="" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                            <div class="desc w-100 px-4 text-center pt-5 mt-5">
                                <div class="text w-100 mb-3 mt-4">
                                    <h2><a href="#">{{$image->title}}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


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

{{-- Map and Contact us Starts   --}}
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div style="width: 100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.933074527766!2d90.31139729204881!3d23.962806616765565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755dddc6cfd7809%3A0x76b815e053637a4d!2sDream%20house%20rehabilitation%20Center!5e0!3m2!1sen!2sbd!4v1716204023332!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>

                                    <form method="POST" action="http://localhost/rehab_center/admin/contact-us" id="contactForm" class="contactForm">
                                        <input type="hidden" name="_token" value="riZQkbFtUmSu5ZE4rBUtojICMxDhWUpNe4ZAiVvC" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
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
                                <p><span>Phone:</span> <a href="tel://1234567920">{{$basic->phone_1}}, {{$basic->phone_2}}</a></p>
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
    {{-- Map and Contact us Ends   --}}
@endsection


@push('scripts')
    <script>

    </script>
@endpush
