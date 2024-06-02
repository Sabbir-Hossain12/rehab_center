@extends('frontend.layout.template')


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


<!-- services Section Start -->
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
                     style="background-image:url({{ asset('public/frontend/images/dream/IMG-20240514-WA0014.jpg') }});">
                </div>
            </div>

            <div class="col-md-6 pr-md-5 py-md-5">
                <div class="row justify-content-start pb-5">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">Our Services</h2>
                        <p style="font-size: 16px; margin: 0;">We offer a structured environment where individuals can receive medical, psychological,
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
            <p style="text-indent: 15%; font-size: 17px; margin-top: 20px;">------ Drug addiction, also known as substance use disorder, is a chronic disease characterized by companies drug-seeking and use, despite harmful consequences. In Bangladesh, drug addiction has become a major issue, affecting indeviduals from all walks of life.It is crucial to have a comprehensive understanding of this problem in  order to address it effectively. </p>
       </div>

    </div>
</section>
<!-- services Section End -->
@endsection
