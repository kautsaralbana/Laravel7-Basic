<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- Tell the browser to be responsive to screen width  --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Laravel 7 CRUD">
        <meta name="author" content="kautsaralbana">
        {{-- Favicon icon  --}}
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
        <title>{{ $title }}</title>
        {{-- Bootstrap Core CSS  --}}
        <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        {{-- chartist CSS  --}}
        <link href="{{asset('assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/css-chart/css-chart.css')}}" rel="stylesheet">
        {{-- This page css - Morris CSS  --}}
        <link href="{{asset('assets/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
        {{-- Vector CSS  --}}
        <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
        {{-- Custom CSS  --}}
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        {{-- You can change the theme colors from here  --}}
        <link href="{{asset('css/colors/purple-dark.css')}}" id="theme" rel="stylesheet">
    </head>

    <body class="fix-header fix-sidebar card-no-border">
        {{-- Preloader - style you can find in spinners.css --}}
        @include('layouts.preloader')

        {{-- Main wrapper - style you can find in pages.scss --}}
        <div id="main-wrapper">
            {{-- header --}}
            @include('layouts.header')

            {{-- Left Sidebar --}}
            @include('layouts.left-sidebar')
            {{-- End Left Sidebar - style you can find in sidebar.scss --}}

            {{-- Page wrapper --}}
            <div class="page-wrapper">
                {{-- Container fluid  --}}
                <div class="container-fluid">
                    {{-- SweetAlert --}}
                    @include('sweetalert::alert')
                    {{-- Content --}}
                    @yield('content')
                    {{-- Right sidebar --}}
                    @include('layouts.right-sidebar')
                </div>
                {{-- End Container fluid  --}}

                {{-- footer --}}
                @include('layouts.footer')
                {{-- End footer --}}
            </div>
            {{-- End Page wrapper  --}}
        </div>
        {{-- End Wrapper --}}
        {{-- All Jquery --}}
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        {{-- Bootstrap tether Core JavaScript --}}
        <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
        {{-- Slimscrollbar scrollbar JavaScript --}}
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        {{-- Wave Effects --}}
        <script src="{{asset('js/waves.js')}}"></script>
        {{-- Menu sidebar --}}
        <script src="{{asset('js/sidebarmenu.js')}}"></script>
        {{-- Stickey kit --}}
        <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
        <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
        {{-- Custom JavaScript --}}
        <script src="{{asset('js/custom.min.js')}}"></script>
        {{-- This page plugins --}}
        {{-- chartist chart --}}
        <script src="{{asset('assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
        <script src="{{asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
        {{-- d3 JavaScript --}}
        <script src="{{asset('assets/plugins/d3/d3.min.js')}}"></script>
        <script src="{{asset('assets/plugins/c3-master/c3.min.js')}}"></script>
        {{-- Vector map JavaScript --}}
        <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{asset('js/dashboard2.js')}}"></script>
        {{-- Style switcher --}}
        <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    </body>

</html>
