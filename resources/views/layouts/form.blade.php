<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Telesandi Cup</title>
        
        <!-- Fonts -->
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/v4-shims.min.css">
        <link rel="icon" href="https://telsfest.syntx.id/images/logo/telscup.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600|Lexend+Deca|Quicksand:200,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/all.min.css">
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/animate.css">
        <style type="text/css" media="screen">
             #loading{
                position: fixed;
                width: 100%;
                height: 100%;
                background-color: #fff;
                z-index: 9999;
            }
            .loading{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                /*height: 50px;
                width: 50px;*/
                display: flex;
                align-items: center;
            }
            .objs{
              /*width: 6px;
              height: 40px;
              background: #157EFF;*/
             /* margin: 0 3px;
              border-radius: 10px;*/
              animation: loading 0.8s infinite;
              /*box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);*/
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
                transform: scale(0);
                opacity: 1
              }
              50%{
                transform: scale(50px);
                opacity: 0;
              }
              100%{
                transform: scale(100px);
                opacity: 1;
              }
            }
        </style>
        @yield('css')
    </head>
    <body>
        <section id="loading">
            <div class="loading">
                <center>
                <img src="https://telsfest.syntx.id/images/logo/loading2.png" alt="loading" width="120px" height="auto" class="objs">
              </center>
            </div>
        </section>
        <section class="header bg" id="header">
            <div class="opc">
            	<nav class="navbar {{-- fixed-top --}} navbar-inverse navbar-expand-lg animated slideInDown" id="navbar">
                <div class="container">
                    <a href="{{ url('/cup')}}" class="navbar-brand" style="position: relative; margin-left:20px">
                        <img src="https://telsfest.syntx.id/images/logo/telscup.png" width="auto" height="59px" class="align-top" id="wi"">
                    </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        {{-- <span class="fas fa-bars" id="navbar-toggler-icon"></span> --}}
                        <i class="fas fa-bars" id="navbar-toggler-icon" style="color: #fff;"></i>
                    </button>
                    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span id="fa_bars" class="fa fa-bars"></span>
                    </button> --}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="/cup#daftar_lombas" class="nav-link">Lomba</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Pendaftaran Lomba</a>
                            </li>
                            @if(Auth::user() == TRUE)
                            <li class="nav-item">
                                <a href="{{ route('dash_user') }}" class="nav-link">Dashboard</a>
                            </li>
                            @else
                            <li style="margin-right: 10px;" class="nav-item">
                                <a href="/register" class="btn btn-outline-success" style="border-radius: 20px;"><i class="fas fa-user-plus"></i> Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="/login" class="btn btn-outline-primary" style="border-radius: 20px;"><i class="fas fa-sign-in-alt"></i> Login</a>
                            </li>
                                @endif
                        </ul>
                    </div>
                </div>
            </nav>
    	@yield('content')
        {{-- <script type="text/javascript" src="https://telsfest.syntx.id/js/jquery.js"></script> --}}
        {{-- <script type="text/javascript" src="https://telsfest.syntx.id/bootstrap4/js/bootstrap.min.js"></script> --}}
        <script src="https://telsfest.syntx.id/js/all.min.js"></script>
        <script src="https://telsfest.syntx.id/js/fontawesome.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
{{--     
<script>
    $(window).on('scroll',function(){

        var header = $('#header');
        var scrollTop = $(this).scrollTop();
        var height = header.outerHeight();
        var offset = height / 2;
        var calc = (scrollTop / height)*1;

        var calcBox = calc/5;

        var calccolor = 255 - ((scrollTop/ height) * 255);

        // console.log(calccolor);

        var navcolor = document.getElementsByClassName("nav-link");
        document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,"+calc+")";
        document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,"+calcBox+")";

        var fa_bars = document.getElementById("navbar-toggler-icon");

        fa_bars.style.color = "rgba("+ calccolor +","+ calccolor +","+ calccolor +")";

        for (var i = 0; i < navcolor.length; i++) {

            navcolor[i].style.color = "rgba("+calccolor+","+calccolor+","+calccolor+")";
        }

        if(calc > '1'){
            document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,"+ calc+")";
            
            for (var i = 0; i < navcolor.length; i++) {
                navcolor[i].style.color = "rgba(0,0,0)";
            }
        document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,0.2)";

        }else if(calc < '0'){
            document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,0)";

            document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,0)";

            
            for (var i = 0; i < navcolor.length; i++) {
                navcolor[i].style.color = "rgba(255,255,255)";
            }           
        }
    })
</script> --}}
{{-- <script>
    $(window).on('scroll',function(){

        var header = $('#header');
        var scrollTop = $(this).scrollTop();
        var height = header.outerHeight();
        var offset = height;
        var calc = (scrollTop / height)*1;

        var calcBox = calc;

        var calccolor = 255 - ((scrollTop/ height) * 255);

        // console.log(calccolor);

        var navcolor = document.getElementsByClassName("nav-link");
        document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,"+calc+")";
        document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,"+calcBox+")";

        var fa_bars = document.getElementById("navbar-toggler-icon");

        fa_bars.style.color = "rgba("+ calccolor +","+ calccolor +","+ calccolor +")";

        for (var i = 0; i < navcolor.length; i++) {

            navcolor[i].style.color = "rgba("+calccolor+","+calccolor+","+calccolor+")";
        }

        if(calc > '1'){
            document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,"+ calc+")";
            
            for (var i = 0; i < navcolor.length; i++) {
                navcolor[i].style.color = "rgba(0,0,0)";
            }
            document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,0.2)";

        }else if(calc < '0'){
            document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,0)";

            document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,0)";

            
            for (var i = 0; i < navcolor.length; i++) {
                navcolor[i].style.color = "rgba(255,255,255)";
            }           
        }
    })
</script> --}}
        @yield('js')
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