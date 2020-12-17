@include('layouts.frontend.header')
<body>
    <div class="layer"></div>
   
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    @include('layouts.frontend.header_url')

     <!-- Header ================================================== -->
    
	 @yield('content')
@include('layouts.frontend.footer')

@include('layouts.frontend.footer_url')
</body>