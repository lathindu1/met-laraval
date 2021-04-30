<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Cryptocurrency Landing Page HTML5 Template">
    <meta name="keywords" content="Cryptocurrency, bitcoin, bitcoin landing, blockchain, crypto trading ">
    <meta name="author" content="Getnajmul">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',"Fin System")</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    @include('library.styles')
    <style>
        #best_feature_06 .shape1 {
            position: absolute;
            top: -25%;
            left: 0;
            right: 0;
            z-index: -1;
        }

        #best_feature_06 .shape1 img {
            width: 100%;
        }

    </style>
</head>

<body class="body_06">
    <!-- Preloader -->
    {{-- @include('components.preloader') --}}
    <section id="best_feature_06">
        @yield('content')
        <span class="shape1 header-shape"><img src="{{ asset('images/shape/home_6/feature-1.png') }}" alt=""></span>
        @include('components.guest-footer')
    </section> <!-- End best_feature -->

    <!-- ./ End Footer Area-->
    @include('library.scripts')

</body>

</html>
