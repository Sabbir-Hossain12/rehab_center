@extends('frontend.layout.template')

@php
    $comments = App\Models\Comment::where('blog_id', $singleBlog->id)->where('status', 1)->get()
@endphp

@push('meta-title')
    Reheb
@endpush

@section('body-content')

<section class="hero-wrap hero-wrap-2" style="background-image: url(&quot; {{ asset('public/frontend/images/bg_2.jpg') }} &quot;); background-position: 50% 58.9141px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{ route('blog') }}">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Blog Single</h1>
        </div>
      </div>
    </div>
</section>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
            <p>
            <img src="{{ asset($singleBlog->img) }}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3">{{ $singleBlog->title }}</h2>
          <p>{{ strip_tags($singleBlog->long_desc) }}</p>


          <div class="pt-5 mt-5">
            @if ( $comments->count() > 0 )
               <h3 class="mb-5">{{ $comments->count() }} Comments</h3>
            @else
               <h3 class="mb-0">Comments</h3>

               <div class="alert alert-success text-center" role="alert">
                 No Comments are here
              </div>
            @endif

            <ul class="comment-list">

                @foreach ( $comments as $items)
                    <li class="comment">
                        <div class="vcard bio">
                        <img src="{{ asset('public/frontend/images/person_1.jpg') }}" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">{{ $items->comment_date }} at {{ $items->comment_time	 }}pm</div>
                        <p>{{ $items->message }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
          </div>

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
             <form method="POST" action="{{ route('single.blog.comment') }}" class="p-5 bg-light">

                @csrf

                <input type="hidden" value="{{ $singleBlog->id }}" name="blog_id">

                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" name="user_name" id="name">
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" name="user_email" id="email">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" cols="30" rows="10" name="message" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

            </form>
          </div>
        </div> <!-- .col-md-8 -->

        <div class="col-lg-4 sidebar pl-lg-5 ftco-animate fadeInUp ftco-animated">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
            <div class="categories">
              <h3>Department</h3>
              <li><a href="{{ route('department') }}">Chiropractic <span class="fa fa-chevron-right"></span></a></li>
              <li><a href="{{ route('department') }}">Acupuncture <span class="fa fa-chevron-right"></span></a></li>
              <li><a href="{{ route('department') }}">Massage <span class="fa fa-chevron-right"></span></a></li>
            </div>
          </div>

          <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
            <h3>Recent Blog</h3>

            @foreach (App\Models\Blog::where('status', 1)->orderBy('id', 'desc')->limit(3)->get() as $item)
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url({{ asset($item->img) }});"></a>
                    <div class="text">
                    <h3 class="heading"><a href="{{ route('single.blog', $item->id) }}">{{ $item->title }}</a></h3>
                    <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span>{{ $item->date }}</a></div>
                        <div><a href="#"><span class="icon-person"></span> {{ $item->posted_by }}</a></div>
                    </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</section>

@endsection
