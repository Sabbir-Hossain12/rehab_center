<div class="top py-1">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <p class="mb-0"><a href="#">chiropractic@email.com</a> | <a href="#">Help Desk</a> | </p>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
                <a class="navbar-brand" href="index.html">Chiropractic</a>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-8 mb-md-0 mb-3">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                            <div class="text"><span>Address</span><span>198 West 21th Street, Suite 721 New York NY 10016</span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
                            <div class="text"><span>Call us</span><span>(+01) 123 456 7890</span></div>
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
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="order-lg-last">
            <a href="#" class="btn btn-primary">Make an appointment</a>
        </div>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::segment(1) === '' ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ Request::segment(1) === 'team' ? 'active' : '' }}"><a href="{{ route('team') }}" class="nav-link">Team</a></li>
                <li class="nav-item {{ Request::segment(1) === 'service' ? 'active' : '' }}"><a href="{{ route('service') }}" class="nav-link">Services</a></li>
                <li class="nav-item {{ Request::segment(1) === 'department' ? 'active' : '' }}"><a href="{{ route('department') }}" class="nav-link">Departments</a></li>
                <li class="nav-item {{ Request::segment(1) === 'gallery' ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item {{ Request::segment(1) === 'blog' ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
