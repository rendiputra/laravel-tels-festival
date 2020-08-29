<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css" media="screen">
    #loading{
        position: fixed;
        width: 100%;
        height: 100vh;
        background-color: #fff;
        z-index: 9999;
    }
    .loading{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        height: 40px;
        display: flex;
        align-items: center;
    }
    .obj{
      width: 6px;
      height: 40px;
      background: #157EFF;
      margin: 0 3px;
      border-radius: 10px;
      animation: loading 0.8s infinite;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);
    }
    .obj:nth-child(2){
      animation-delay: 0.1s;
    }
    .obj:nth-child(3){
      animation-delay: 0.2s;
    }
    .obj:nth-child(4){
      animation-delay: 0.3s;
    }
    .obj:nth-child(5){
      animation-delay: 0.4s;
    }
    .obj:nth-child(6){
      animation-delay: 0.5s;
    }
    .obj:nth-child(7){
      animation-delay: 0.6s;
    }
    .obj:nth-child(8){
      animation-delay: 0.7s;
    }


    @keyframes loading {
      0%{
        height: 0;
      }
      50%{
        height: 40px;
      }
      100%{
        height: 0;
      }
    }
</style>
</head>
<body>
    <section id="loading">
        <div class="loading">
          <div class="spinner-border text-primary"></div>
        </div>
    </section>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
    //var preloader = document.getElementById('loading');

    $(window).on('load', function(){
        document.getElementById("loading").style.display = 'none';
        $(".item-logo").addClass('animated zoomInDown');
        $(".header-content").addClass('animated slideInUp');
        $(".item-header").addClass('animated fadeInLeft');
    });

    // function myFunction(){
    //     preloader.style.display = 'none';
    // }
</script>
</body>
</html>
