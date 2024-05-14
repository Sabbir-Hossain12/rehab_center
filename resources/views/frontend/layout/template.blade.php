
 @include('frontend.includes.meta-tags')

<body>

   @include('frontend.includes.header')

   <!-- Main body Section Start -->

      @yield('body-content')

    <!-- Main body Section Start -->

   @include('frontend.includes.footer')

   @include('frontend.includes.script')

</body>
</html>
