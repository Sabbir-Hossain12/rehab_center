@extends('frontend.layout.template')


@section('body-content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('public/frontend/images/dream/IMG-20240514-WA0008.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Contact Us</h1>
        </div>
      </div>
    </div>
</section>

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

                                <form method="POST" action="{{ route('contact.us') }}" id="contactForm" class="contactForm">
                                    @csrf

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
                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text pl-3">
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <div class="text pl-3">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text pl-3">
                            <p><span>Website</span> <a href="#">yoursite.com</a></p>
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

@endsection
