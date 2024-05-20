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
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> </p>
          <h1 class="mb-0 bread">Pricing Plan Page</h1>
        </div>
      </div>
    </div>
</section>

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
                <div class="card_container">
                    <div class="card_details">
                        <div class="card_title">
                            <h3>PACKAGE 1</h3>
                            <div class="pricing">
                                ৳<span> 20000 / BDT</span>
                            </div>
                            <p>Four Month</p>
                        </div>
                    </div>

                    <div class="card_price_description">
                        <ul>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Accomodations
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Treatment
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Counselling
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Foods
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> TV
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> 10 Bed Sharing
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card_container">
                    <div class="card_details">
                        <div class="card_title">
                            <h3>PACKAGE 2</h3>
                            <div class="pricing">
                                ৳<span> 20000 / BDT</span>
                            </div>
                            <p>Four Month</p>
                        </div>
                    </div>

                    <div class="card_price_description">
                        <ul>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Accomodations
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Treatment
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Counselling
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Foods
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> TV
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> 3 Bed Sharing
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Superior Room
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Extra Food
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Individual Counselling
                            </li>
                            <li class="pricing_list">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Extra Teaching Facility
                            </li>
                        </ul>
                    </div>
                </div>

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

@endsection
