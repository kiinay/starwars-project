<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>StarWars Market</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skeleton.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">--}}

    {{--<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>--}}
  </head>

  <body>
    <header id="header-container" class="row">
      @include('partials.main_menu')
    </header>


      <h1 class="market-title">
        <a href="{{ url('/') }}">STAR WARS MARKET</a>
      </h1>
    <div class="container">
      @yield('content', 'default value')
    </div>

    <footer id="footer-container" class="row">
      @include('partials.footer_menu')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
  </body>
</html>