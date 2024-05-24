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
            
            @foreach($teams as $team) 
            <div class="col-md-4 ftco-animate d-flex fadeInUp ftco-animated">
                <div class="staff bg-primary">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset($team->team_img) }});"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>{{$team->team_name }}

                        </h3>
                        <span class="position mb-2">{{$team->designation}}</span>
                        <div class="faded">
                            {{--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>--}}
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="{{$team->twitter_link }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="{{$team->facebook_link }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="{{$team->google_link }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="{{$team->instagram_link }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            
        </div>
    </div>
</section>

@endsection
