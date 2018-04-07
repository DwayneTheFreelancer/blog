<html lang="{{ config('app.locale') }}">
    <head>
        <title>App Name - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{--  <link href="{{ url('css/app.css') }}" rel="stylesheet">  --}}
    </head>
    <body>
        {{--  <header>
            <div class="container">
                <nav>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Search</a>
                    <a href="#">Content</a>
                </nav>
            </div>
        </header>  --}}
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">{{ config('app.name', 'blog') }}</a>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
              </div>
            </div>
        </nav>
        {{--  @section('sidebar')
            This is the master sidebar.
        @show  --}}

        <div class="container">
            @yield('content')
        </div>
        {{--  <script src="{{ url('js/popper.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>  --}}
    </body>
</html>