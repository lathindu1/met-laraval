  <!-- Goole Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Font awsome CSS -->
  <link rel="stylesheet" href="{{ asset('css/assets/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
  <!-- popup-->
  <link rel="stylesheet" href="{{ asset('css/assets/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/owl.theme.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/jquery.countdown.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/animate.css') }}">
  <!-- preloader css-->
  <link rel="stylesheet" href="{{ asset('css/assets/preloader.css') }}">
  <!-- main style-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cryptonio.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Styles -->
  {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

  {{-- Confirmjs css --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css" />

  @livewireStyles

  @stack('css')
