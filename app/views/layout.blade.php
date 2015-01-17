<!doctype html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <title>另北的Laravel測試</title>
  <link rel="stylesheet" href="{{ asset('assets/bower/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/custom/css/custom.css') }}">
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
            <li class="active"><a href="./">Home</a></li>
            <li><a href="./about">About</a></li>
            <li><a href="./contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@yield('content')

  <script src="{{ asset('assets/bower/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>