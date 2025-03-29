<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themepresss">
    <title>Cybersecurity Portfolio</title>

    <!-- Icon fonts -->
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Stylesheets -->
    {{-- Bootsrap core css --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- Custom styles for the template --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

    @stack('styles') <!-- For adding page-specific styles -->
</head>


<body id="home">

    <div class="page-wrapper page-wrapper-2">
        
        <!-- Header -->
        @include('partials.header')
        
        <!-- Page Content -->
        @yield('content')
        
        <!-- Footer -->
        @include('partials.footer')
        
    </div>


    <!-- JavaScript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}" type="module"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>   
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>   
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>   
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    {{-- <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>    --}}
    {{-- <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>    --}}
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>

    @stack('scripts') <!-- For adding page-specific scripts -->
</body>
</html>
