<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS Start -->
            @include('frontEnd.includes.partials.stylesheets')
        <!-- CSS End -->

        <link rel="shortcut icon" href="{{ asset('frontEnd/img/favicon.png')}}" type="image/x-icon">
        <title>@yield('title')</title>
    </head>

<body data-spy="scroll" data-target="#mainNavbar">
        
        <!-- Header Start -->
        @include('frontEnd.includes.header')
        <!-- Header End -->  

         <!--  Main Content Start-->
            @yield('mainContent')
        <!--  Main Content Start-->

        <!-- footer start -->
        @include('frontEnd.includes.footer')
        <!-- footer end -->

        <!-- js Start -->    
        @include('frontEnd.includes.partials.scripts')
        <!-- js End -->

    </body>

</html>