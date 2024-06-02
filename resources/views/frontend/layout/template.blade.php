
 @include('frontend.includes.meta-tags')

<body>

   @include('frontend.includes.header')

   <!-- Main body Section Start -->

      @yield('body-content')

    <!-- Main body Section Start -->

   @include('frontend.includes.footer')

   @include('frontend.includes.script')

   {{-- Phone icon Starts   --}}

   <a href="tel:+88{{ App\Models\Basic::first()->phone_1 }}" target="_blank" style="position: fixed;bottom: 50px;right: 6px;z-index:1111">
       <img src="{{ asset('public/frontend/images/mobile.png') }}" style="height: 60px; border-radius:50%">
   </a>
   {{-- Phone icon Ends   --}}
</body>
</html>
