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
          <h1 class="mb-0 bread">Blog Page</h1>
        </div>
      </div>
    </div>
</section>

<!-- Blog Post section start -->
<section class="ftco-section">
    <div class="container">
      <div class="row">

           @foreach ( App\Models\Blog::where('status', 1)->orderBy('id', 'desc')->SimplePaginate(6) as $blog )
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
                        <h3 class="heading"><a href="{{ route('single.blog', $blog->id) }}">{{ $blog->title }}</a>
                        </h3>
                    </div>
                </div>
            </div>
          
          @endforeach

               <div>
                   {{ App\Models\Blog::where('status', 1)->orderBy('id', 'desc')->simplePaginate(6)->links() }}

               </div>

       </div>
    </div>
  
</section>
<!-- Blog Post section end -->

@endsection
