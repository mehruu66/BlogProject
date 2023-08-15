<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('meta_description')">
        <meta name="keywords" content="@yield('meta_keywords')">
        <meta name="author" content="Mehreen Akhter">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- styles -->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/owl.theme.default.css')}}" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">
            @include('layouts.inc.frontend-navbar')
              <!-- Page Content -->
              <main class="">
               @yield('content')
            </main>
            @include('layouts.inc.frontend-footer')
        </div>

          
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        
        <script>
            $('.category-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                 dots:false,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
})
        </script>
    </body>
</html>
