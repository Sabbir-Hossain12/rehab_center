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
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="">Home</a></span> </p>
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







@endsection
