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
  {{--<link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css') }}">--}}
  {{--<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">--}}

  {{--<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>--}}
</head>

<body>
<div id="header-container">
  <header class="row">
    <ul class="nine columns">
      @include('partials.main_menu')
    </ul>
  </header>
</div>

<div class="container">
  @yield('content', 'default value')
</div>

<footer id="footer-container">
  <div class="row">
    @include('partials.footer_menu')
  </div>
</footer>
</body>
</html>