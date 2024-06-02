@extends('frontend.layout.template')


@section('body-content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0008.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
</section>

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
{{--                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                            <div class="block-18">--}}
{{--                                <div class="text">--}}
{{--                                    <strong class="number" data-number="2">0</strong>--}}
{{--                                </div>--}}
{{--                                <div class="text">--}}
{{--                                    <span>Award <br>Winning</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end -->

<!-- Success Story Section Start -->
{{--<section class="ftco-section testimony-section bg-dark">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center pb-5 mb-3">--}}
{{--            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">--}}
{{--                <span class="subheading">Testimonies</span>--}}
{{--                <h2>Our Success Story</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row ftco-animate">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="carousel-testimony owl-carousel ftco-owl">--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap py-4">--}}
{{--                            <div class="icon d-flex align-items-center justify-content-center"><span--}}
{{--                                        class="fa fa-quote-left"></span></div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">ড্রিম হাউসে আসা আমার জীবনের সেরা সিদ্ধান্ত ছিল। সুবিধাটি--}}
{{--                                    শীর্ষস্থানীয়, এবং স্টাফ প্রত্যেক ব্যক্তির পুনরুদ্ধার সম্পর্কে সত্যিই যত্নশীল।--}}
{{--                                    থেরাপি সেশন এবং সামগ্রিক কার্যক্রম আমাকে আমার জীবনের নিয়ন্ত্রণ পুনরুদ্ধার করতে--}}
{{--                                    সহায়তা করেছে। আমি আমার দ্বিতীয় সুযোগের জন্য কৃতজ্ঞ এবং এই নতুন অধ্যায়টি শুরু--}}
{{--                                    করার জন্য উচ্ছ্বসিত।</p>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="user-img"--}}
{{--                                         style="background-image: url({{asset('public/frontend/images/testimonies/one.webp')}})"></div>--}}
{{--                                    <div class="pl-3">--}}
{{--                                        <p class="name">Abdur Kader</p>--}}
{{--                                        <span class="position">Mirpur,Dhaka</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap py-4">--}}
{{--                            <div class="icon d-flex align-items-center justify-content-center"><span--}}
{{--                                        class="fa fa-quote-left"></span></div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">Coming to Dream House was the best decision I ever made. The--}}
{{--                                    facility is top-notch, and the staff genuinely cares about each individual's--}}
{{--                                    recovery. The therapy sessions and holistic activities helped me regain control--}}
{{--                                    of my life. I’m grateful for the second chance I’ve been given and am excited to--}}
{{--                                    start this new chapter</p>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="user-img"--}}
{{--                                         style="background-image: url({{asset('public/frontend/images/testimonies/two.webp')}})"></div>--}}
{{--                                    <div class="pl-3">--}}
{{--                                        <p class="name">Nazmul Hasan</p>--}}
{{--                                        <span class="position">Gazipur</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap py-4">--}}
{{--                            <div class="icon d-flex align-items-center justify-content-center"><span--}}
{{--                                        class="fa fa-quote-left"></span></div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">ড্রিম হাউস আমার জীবনের রক্ষাকর্তা হয়েছে। যখন আমি প্রথম এখানে আসি,--}}
{{--                                    তখন আমি জীবনের নিম্নতম অবস্থানে ছিলাম, কিন্তু সহানুভূতিশীল স্টাফ এবং ব্যাপক--}}
{{--                                    প্রোগ্রামগুলি আমাকে সুস্থতার পথে ফিরিয়ে এনেছে। এখানে সকলের সমর্থন--}}
{{--                                    অসাধারণ, এবং আমি চমৎকার বন্ধু তৈরি করেছি। আমি নতুন উদ্দীপনা এবং ভবিষ্যতের--}}
{{--                                    জন্য আশাবাদ নিয়ে যাচ্ছি।</p>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="user-img"--}}
{{--                                         style="background-image: url({{asset('public/frontend/images/testimonies/three.avif')}})"></div>--}}
{{--                                    <div class="pl-3">--}}
{{--                                        <p class="name">Alom Al Khokon</p>--}}
{{--                                        <span class="position">Savar</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap py-4">--}}
{{--                            <div class="icon d-flex align-items-center justify-content-center"><span--}}
{{--                                        class="fa fa-quote-left"></span></div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">ড্রিম হাউস আমাকে জীবনে ফিরে আসার একটি সুযোগ দিয়েছে। যখন আমি এখানে--}}
{{--                                    আসি, তখন আমি সম্পূর্ণভাবে ভেঙে পড়েছিলাম। কিন্তু স্টাফদের সহানুভূতি এবং--}}
{{--                                    প্রফেশনালিজম আমাকে পুনরায় আমার পথ খুঁজে পেতে সাহায্য করেছে। তাদের ধৈর্য এবং--}}
{{--                                    সমর্থন ছাড়া আমি এই দূরত্বে আসতে পারতাম না। আমি--}}
{{--                                    জীবনের প্রতি নতুন উদ্দীপনা পেয়েছি।</p>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="user-img"--}}
{{--                                         style="background-image: url({{asset('public/frontend/images/testimonies/four.webp')}})"></div>--}}
{{--                                    <div class="pl-3">--}}
{{--                                        <p class="name">Himel Hossain</p>--}}
{{--                                        <span class="position">Gazipur</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="testimony-wrap py-4">--}}
{{--                            <div class="icon d-flex align-items-center justify-content-center"><span--}}
{{--                                        class="fa fa-quote-left"></span></div>--}}
{{--                            <div class="text">--}}
{{--                                <p class="mb-4">My time at Dream House has been transformative. The personalized--}}
{{--                                    care and attention to detail in the treatment plans really set this place apart.--}}
{{--                                    I felt heard and understood, which made all the difference in my recovery--}}
{{--                                    journey. I’m now looking forward to a bright and sober future, thanks to the--}}
{{--                                    incredible team at Dream House</p>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="user-img"--}}
{{--                                         style="background-image: url({{asset('public/frontend/images/testimonies/four.webp')}})"></div>--}}
{{--                                    <div class="pl-3">--}}
{{--                                        <p class="name">Azad Mahmood</p>--}}
{{--                                        <span class="position">Tongi</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Success Story Section end -->

@endsection
