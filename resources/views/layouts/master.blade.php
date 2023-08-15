<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- style -->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />

        <!-- summernote -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
        
       <style>
            .dataTables_wrapper .dataTables_paginate .paginate_button{
                padding: 0px !important;
                margin: 0px !important;
            }
            .dataTables_wrapper div.dataTables_length select {
                width: 50% !important;
            }

        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.inc.admin-navbar')

        <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
        <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
        @include('layouts.inc.admin-footer')
       </div>
        </div>
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>

        <!-- summernote js link -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#mysummernote").summernote({
                height:150,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->
        <script>
                $(document).ready(function() {
                    $('#myDatatable').DataTable();
                });
                
            </script>
            @yield('scripts')
    </body>
</html>