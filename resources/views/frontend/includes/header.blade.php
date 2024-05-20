

<div class="wrap d-lg-block d-md-none d-sm-none d-none">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
                <a class="navbar-brand" href="">Dream House</a>

            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-8 mb-md-0 mb-3">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                            <div class="text"><span>Address</span><span>1/2 Surabari.ShoilBari Road,Ward No-6,Kashimpur,Gazipur</span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
                            <div class="text"><span>Call us</span><span>01973515171, 01908459216</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
             <a class="navbar-brand" href="">Dream House</a>
        </button>
        {{-- <div class="order-lg-last">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticData">Make an appointment</button>
        </div> --}}
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::segment(1) === '' ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ Request::segment(1) === 'team' ? 'active' : '' }}"><a href="{{ route('team') }}" class="nav-link">Team</a></li>
                <li class="nav-item {{ Request::segment(1) === 'service' ? 'active' : '' }}"><a href="{{ route('service') }}" class="nav-link">Services</a></li>
                <li class="nav-item {{ Request::segment(1) === 'department' ? 'active' : '' }}"><a href="{{ route('department') }}" class="nav-link">Departments</a></li>
                <li class="nav-item {{ Request::segment(1) === 'gallery' ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item {{ Request::segment(1) === 'pricing-plan' ? 'active' : '' }}"><a href="{{ route('pricing-plan') }}" class="nav-link">Pricing Plan</a></li>
                <li class="nav-item {{ Request::segment(1) === 'blog' ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
{{-- <div class="modal fade" id="staticData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="col-md-12 bg-primary p-5 heading-section heading-section-white">
            <span class="subheading">Booking an Appointment</span>
            <h2 class="mb-4">Free Consultation</h2>
            <form action="#" class="appointment">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone number">
                        </div>
                    </div>

                    <div class="col-md-12">
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

                    <div class="col-md-12">
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

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Date">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="fa fa-clock-o"></span></div>
                                <input type="text" class="form-control appointment_time ui-timepicker-input" placeholder="Time" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" value="Send message" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div> --}}
