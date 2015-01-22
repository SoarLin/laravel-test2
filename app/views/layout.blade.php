<!doctype html>
<html lang="zh-TW">
<head>
  <!-- metas -->
  <title>另北的Laravel測試</title>
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <!--/ metas -->

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!--/ favicon -->

  <!-- styles -->
  {{ HTML::style('assets/bower/font-awesome/css/font-awesome.min.css') }}
  {{ HTML::style('assets/bower/fancybox/source/jquery.fancybox.css') }}
  {{ HTML::style('assets/bower/owlcarousel/owl-carousel/owl.carousel.css') }}
  {{ HTML::style('assets/bower/slider-revolution/src/css/settings.css') }}
  {{ HTML::style('assets/custom/css/main.css') }}
  {{ HTML::style('assets/custom/css/color.css') }}
  <!-- <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/jquery.owl.carousel.css">
  <link rel="stylesheet" href="js/rs-plugin/css/settings.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/color.css"> -->
  <!--/ styles -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/bower/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/custom/css/custom.css') }}"> -->
</head>
<body>
  <header>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">另北的Laravel</a>
        </div>

        <div class="collapse navbar-collapse" id="my-navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Home</a></li>
            <li><a href="./about">About</a></li>
            <li><a href="./contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  @yield('content')
  <div class="bottom-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-2 navbar-brand">
          <a href="/">Learning Laravel</a>
        </div>

        <div class="col-md-10">
          <ul class="bottom-links">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('assets/bower/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>