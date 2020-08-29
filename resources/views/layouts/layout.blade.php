<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Telesandi Cup</title>
        <link rel="icon" href="https://telsfest.syntx.id/images/logo/telscup.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600|Lexend+Deca|Quicksand:200,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">        <!-- Styles -->
        {{-- <link rel="stylesheet" type="text/css" href="https://telsfest.syntx.id/bootstrap4/css/bootstrap.min.css"> --}}

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://telsfest.syntx.id/css/all.min.css">
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/animate.css">
        <style type="text/css">
        	html,
        	body{
        		height: 100%;
        		width: 100%;
        	}
        	.fs{
        		height: 100%;
        		width: 100%;
                overflow: hidden;
        	}
        	.opc{
        		width: 100%;
        		height: 100%;
        		background-color: rgba(0,0,0,0.6);
        	}
        	.bg{
                 background-image: url("https://telsfest.syntx.id/images/cup-bg.jpg");
        		background-size: cover;
  				background-attachment: fixed;
        		width: 100%;
        		height: 100%;
        	}
        	.centered{
        		color:white;
        		position: absolute;
        		left: 50%; top:50%;
        		transform: translate(-50%,-50%);
        	}
        	.spacer{
        		width: 100%;
        		height: 100px;
        	}
            .navbar{
                font-family: Quicksand;
                font-weight: 700;
            }
            .nav-item{
                margin-left: 10px;
                margin-bottom: 10px;
            }

            /*.navbar-toggler-icon{
                color: white;
            }*/
                /*.navbar{
                padding: 3px;
                z-index: 2;
                transition: 0.5s;
                background-color: rgba(255,255,255,0);
                 }
                .nav-link{
                    color:white;
                }
                .nav-link:hover{
                    color:#7C7C7C;
                }*/
        </style>
        
        @yield('css')
    </head>
    <body>
        
    	<section class="fs" id="header">
            <div class="bg">
	    	{{-- <nav class="navbar navbar-light navbar-expand-lg fixed-top"> --}}
           <nav class="navbar fixed-top navbar-inverse navbar-expand-lg animated slideInDown" id="navbar">
                <div class="container">
                    <a href="{{ url('/') }}" class="navbar-brand" style="position: relative; margin-left:20px">
                        <img src="{{ url('images/logo/festcup.png')}}" width="auto" height="59px" class="align-top" id="wi"">
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
                                <a href="{{ url('/') }}" class="nav-link">Telesandi Festival</a>
                            </li>
                            <li class="nav-item">
                                <a href="/cup#daftar_lombas" class="nav-link">Lomba</a>
                            </li>
                            @if(Auth::user() == TRUE)
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" style="width: 200px;" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->isAdmin == TRUE)
                                    <a href="{{ route('home') }}" class="dropdown-item">Dashboard</a>
                                    <a href="{{ route('user_manage') }}" class="dropdown-item">Manage User</a>
                                    <a href="{{ route('admin_lomba') }}" class="dropdown-item">Manage Lomba</a>
                                    <a href="{{ route('confirm') }}" class="dropdown-item">Manage Payment</a>
                                    <a href="{{ route('daftar_ulang') }}" class="dropdown-item">Daftar Ulang</a>
                                    <a href="{{ route('partner') }}" class="dropdown-item">Partner</a>
                                @else
                                    <a href="{{ route('dash_user') }}" class="dropdown-item">Dashboard</a>
                                @endif
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





            <div class="opc">
    	    	<div class="centered">
    	    		@yield('header')
    	    	</div>		
            </div>
            </div>
		</section>
    	@yield('content')
    	{{-- <script type="text/javascript" src="https://telsfest.syntx.id/js/jquery.js"></script> --}}
    	{{-- <script type="text/javascript" src="https://telsfest.syntx.id/bootstrap4/js/bootstrap.min.js"></script> --}}
        <script src="https://telsfest.syntx.id/js/all.min.js"></script>
        <script src="https://telsfest.syntx.id/js/fontawesome.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d84750bc22bdd393bb6d407/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->


        <script>
            // Select all links with hashes
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              // Does a scroll target exist?

              console.log(target);

              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          });
        </script>
       
       @yield('js')
    </body>
</html>