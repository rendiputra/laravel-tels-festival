    @extends('layouts.layout')
@section('css')
	<style type="text/css">
		/*.bg{
			background-color: #000C25;
		}*/
		/*.navbar{
		    box-shadow: 0px 2px 5px #0000001f;
		}*/
	    .nav-link{
	      padding-left: 0px;
	      padding-right: 0px;
	      margin-left: 10px;
	      margin-right: 10px;
	      color: white;
	      transition: .5s;
	      position: relative;
	    }
		.nav-link:before{
	      content: "";
	      position: absolute;
	      left: 50%;
	      bottom: 5px;
	      transform: translate(-50%, -50%);
	      width: 0;
	      height: 1px;
	      background-color: rgb(201, 201, 201);
	      transition: .1s;
		}
	    .nav-link:hover{
	      color: rgb(201, 201, 201);
	    }
	    .nav-item:hover .nav-link:before{
	      width: 80%;
	    }
	    .item{
	    	/*padding: 10px;
	    	margin: 10px;
	    	margin-left: 20px;
	    	margin-right: 20px;
	    	border-radius:5px;
	    	overflow: hidden;
	    	background-color: #FFFFFF;*/
	    }
	    .item-2{
	    	padding: 10px;
	    	margin: 10px;
	    	margin-left: 20px;
	    	margin-right: 20px;
	    	border-radius:5px;
	    	overflow: hidden;
	    	background-color: #FFFFFF;
	    }
	    .item-2:hover{
	      	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
	    }
	    .sponsor-img{
	    	opacity: 0.5;
	    	transition: 0.5s;
	    }
	    .sponsor-img:hover{
	    	opacity: 1;
	    }
	    a{
	    	text-decoration: none;
	    	color:black;
	    }
	    a:hover{
	    	text-decoration: none;

	    }
	    .partner-img{
	    	width: 50px;
	    	max-width: 80%;
	    	max-height: 100%;
	    	transform: 0.3s;
	    }
	    .partner{
	    	padding: 10px;
	    	height: 100px;
	    	text-align: center;
	    }
	    .footer{
	    	padding: 5px;
	    	width: 100%;
	    	color:#f0f0f0;
	    	background-color:black;
	    }
	    .header-content .title{
            font-family: 'Poppins', sans-serif;
            color: #fff;
            font-size: 50px;
            font-style: italic;
            font-weight: 700;
        }
        .section-title {
            /*color: #dd2476;*/
            color: #FF2BB7;
            font-family: Poppins;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .section-text {
            color: #000;
            font-family: Poppins;
            font-size: 32px;
            font-weight: 700;
            padding-bottom: 10px;
            line-height: 38px;
        }

        .section-desc {
            font-family: Poppins;
            color: #555;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 25px;
            line-height: 28px;
            letter-spacing: 0.7px;
        }
        .section-text span {
            color: #944179;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(30%, #ff512f), to(#dd2476));
            background: -webkit-linear-gradient(top, #ff512f 30%, #dd2476 100%);
                background-clip: border-box;
            background: -o-linear-gradient(top, #ff512f 30%, #dd2476 100%);
            background: transparent, linear-gradient(to bottom, #ff512f 30%, #dd2476 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .section-desc span {
            color: #944179;
            /*background: -webkit-gradient(linear, left top, left bottom, color-stop(30%, #ff512f), to(#dd2476));
            background: -webkit-linear-gradient(top, #ff512f 30%, #dd2476 100%);
                background-clip: border-box;
            background: -o-linear-gradient(top, #ff512f 30%, #dd2476 100%);*/
           background: -moz-linear-gradient(top, rgb(248,80,50) 0%, rgb(241,111,92) 29%, rgb(246,41,12) 70%, rgb(240,47,23) 71%, rgb(231,56,39) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgb(248,80,50)), color-stop(29%, rgb(241,111,92)), color-stop(70%, rgb(246,41,12)), color-stop(71%, rgb(240,47,23)), color-stop(100%, rgb(231,56,39)));
background: -webkit-linear-gradient(top, rgb(248,80,50) 0%, rgb(241,111,92) 29%, rgb(246,41,12) 70%, rgb(240,47,23) 71%, rgb(231,56,39) 100%);
background: -o-linear-gradient(top, rgb(248,80,50) 0%, rgb(241,111,92) 29%, rgb(246,41,12) 70%, rgb(240,47,23) 71%, rgb(231,56,39) 100%);
background: -ms-linear-gradient(top, rgb(248,80,50) 0%, rgb(241,111,92) 29%, rgb(246,41,12) 70%, rgb(240,47,23) 71%, rgb(231,56,39) 100%);
background: linear-gradient(to bottom, rgb(248,80,50) 0%, rgb(241,111,92) 29%, rgb(246,41,12) 70%, rgb(240,47,23) 71%, rgb(231,56,39) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .lomba-card .card{
        	-webkit-box-shadow: 0px 0px 25px 0px rgba(79,79,79,1);
			-moz-box-shadow: 0px 0px 25px 0px rgba(79,79,79,1);
			box-shadow: 0px 0px 25px 0px rgba(0,0,0,1);
            transition: .5s;
            flex: 3;

			/*background-color: #E7E7E7;*/
        }

        /*.link-lomba:hover{

        }*/
        
        .bg-lomba{
            background-image: url("https://telsfest.syntx.id/images/bg-kontak.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            
        }
        .opcs{
            width: 100%;
    		height: 100%;
    		background-color: rgba(0,0,0,0.8);
        }
        
        .section-text-footer-logo{
            font-family: Poppins;
            color: #000;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
            /*line-height: 28px;*/
            letter-spacing: 0.7px;
        }
        
        .section-text-footer{
            font-family: Poppins;
            color: #000;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 15px;
            /*line-height: 28px;*/
            letter-spacing: 0.7px;
        }
        .footer-sect{
                color: #fff;
            }

            .alink-team:hover{
                text-decoration: none;
                border: none;
            }
            .footer-grids{
                margin-left: 1.5em;
            }

            .footer-grid ul li{
              list-style: none;
              margin-bottom: 1em;
              color: #999;              
            }

            .footer-grid ul li i{
              /*  color: #999;
                border: 1px solid #999;*/
                padding: .5em;
            }

            .footer-grid ul li svg{
                color: #999;
                /*border: 1px solid #999;*/
                /*padding: .5em;*/
                /*padding: 1em;*/
                border-radius: 100%;
                margin-right: .5em;
            }

            .footer-grid ul li p{
                display: inline;
                /*margin-left: 0.2em;*/
            }

            .footer-grid ul li p span{
                display: block;
                margin-left: 2em;
            }

            .footer-grids ul li{
              list-style: none;
              margin-bottom: 1em;
              color: #999;
              margin-left: 10px;
            }

            .footer-grids ul li i{
              /*  color: #999;
                border: 1px solid #999;*/
                padding: .5em;
            }

            .footer-grids ul li svg{
                color: #999;
                /*border: 1px solid #999;*/
                /*padding: .5em;*/
                /*padding: 1em;*/
                border-radius: 100%;
                margin-right: .5em;
            }

            .footer-grids ul li p{
                display: inline;
                /*margin-left: 0.2em;*/
            }

            .footer-grids ul li p span{
                display: block;
                margin-left: 2em;
            }

            .footer-grids ul li a{
                color: #999;
            }
            .footer-grids ul li a:hover{
                color: #fff;
                border: none;
                text-decoration: none;
            }

            .lomba-card .card:hover{
                flex: 10;
                transform: scale(1.3);
                z-index: 999;

            }
            .link-footer{
              color: #03A1E3;
            }
            .link-footer:hover{
              color: #076ECE;
              text-decoration: none;
            }
            .livestreming-class{
                background-color: #eeecec;
            }
	</style>
@endsection
@section('header')
	<div class="text-center" style="color:white">
		<div class="header-content">
			<div class="header-img animated zoomIn">
				<img src="https://telsfest.syntx.id/images/logo/telscup.png" class="img-fluid" max-width="100%" width="50%">
			</div>
			<div class="title animated jackInTheBox aseqqq" style="margin-top: 30px;">
				<h2><b>ONE TEAM, ONE DREAM, ONE VICTORY.</b></h2>
			</div>
		</div>
	</div>
@endsection
@section('content')
	<section id="about">
		<div class="spacer"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col col-md-6 col-sm-10 col-12 text-center">
					<img class="align-self-center" src="https://telesandifestival.com/images/cup-bg2.png" width="80%" height="auto">
				</div>
				<div class="col col-md-6 col-sm-10 col-12 {{-- text-center --}} justify-content-center">
					<div class="header-section">
						<p class="section-title">Tentang</p>
	        			<h4 class="section-text text-left"> Telesandi Cup</h4>
	        			{{-- <div style="height: 2px; width: 100px; background-color: #565656"></div> --}}
	        			{{-- <div class="spacer" style="height: 20px;"></div> --}}
						<p class="align-self-center section-desc"><b><span>TELESANDI CUP</span></b> Merupakan Ajang perlombaan yang diperlombakan oleh <b><span>SMK TELEKOMUNIKASI TELESANDI BEKASI</span></b> untuk <b><span>SEMUA PELAJAR</span></b></p>
					</div>
					<div class="teaser" style="height: 300px; width: auto;">
						<center>
                            <div class="video-tes">
                                <video width="100%" height="100%" {{-- autoplay --}} controls>
                                  <source src="https://telsfest.syntx.id/videos/motiongrap.mp4" type="video/mp4">
                                  {{-- <source src="mov_bbb.ogg" type="video/ogg"> --}}
                                  Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </center>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</section>
	<section id="daftar_lombas" class="bg-lomba" name="daftar_lomba">
	    <div class="opc">
    		<div class="spacer"></div>
    		<div class="container">
    			<div class="row">
    				<div class="col col-12 col-md-12 text-center">
    					<div class="lomba header-section">
    						<h4 class="section-text" style="color: #fff;">DAFTAR PERLOMBAAN</h4>
    					</div>
    				</div>
    			</div>
    			<div class="row justify-content-center">
    				@foreach($lomba as $a)
    				<div class="col col-xl-2 col-md-2 col-sm-4 col-6 text-center">
    					<div class="lomba-card mt-5">
    						<a href="{{ route('lomba',str_replace(' ','-',$a->nama_lomba)) }}" class="link-lomba">
    							<div class="card">
    							  <div class="card-body">
    							    <div class="item">
    									<img src="{{ asset('images/logo/'.$a->logo_lomba) }}" alt="" class="img-fluid" max-width="100%" width="99%">
    									<small>{{ $a->nama_lomba}}</small>
    								</div>
    							  </div>
    							</div>
    						</a>
    					</div>
    				</div>
    				@endforeach
                    <div class="col col-xl-2 col-md-2 col-sm-4 col-6 text-center">
                        <div class="lomba-card mt-5">
                            <a href="http://telesandifootballcup.com" class="link-lomba">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="item">
                                        <img src="http://football.syntx.id/img/tfc.png" alt="" class="img-fluid" max-width="100%" width="99%">
                                        <small>Mini Soccer</small>
                                    </div>
                                  </div>
                                </div>
                            </a>
                        </div>
                    </div>



    			{{-- 	<div class="col col-xl-2 col-md-2 col-sm-4 col-6 text-center">
    					<div class="lomba-card mt-5">
    						<a href="" class="link-lomba">
    							<div class="card">
    							  <div class="card-body">
    							    <div class="item">
    									<img src="https://telsfest.syntx.id/images/logo/1567186710.png" alt="" class="img-fluid" max-width="100%" width="99%">
    									<small>STORY TELLING</small>
    								</div>
    							  </div>
    							</div>
    						</a>
    					</div>
    				</div>
    			</div>
     --}}
    			
    		{{-- 	<div style="height: 2px; width: 100px; background-color: #565656"></div>
    			<div class="spacer" style="height: 20px;"></div> --}}
    			{{-- <div class="row justify-content-center"> --}}
    {{-- @foreach($lomba as $a)
    				<div class="col col-xl-2 col-md-2 col-sm-4 col-6 text-center">
    					<a href="{{ route('lomba',str_replace(' ','-',$a->nama_lomba)) }}" class="link">
    						<div class="item">
    							<img src="{{ asset('images/logo/'.$a->logo_lomba) }}" width="100%">
    							<small>{{ $a->nama_lomba}}</small>
    						</div>
    					</a>
    				</div>
    @endforeach --}}
    			{{-- </div> --}}
    		<div class="spacer"></div>
    		</div>
    	</div>
	</section>
	<section class="footer" style="background-color: #FFF;">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-3 text-center">
                        <div class="logo-footer mt-5">

                            <img src="https://telsfest.syntx.id/images/logo/telscup.png" alt="" class="img-fluid" max-width="100%" width="80%">
                            <h4 class="section-text-footer"><a href="" class="section-text-footer-logo">TELESANDI CUP</a></h4>
                        </div>
                            
                            {{-- <p>Copyright 2019 - Powered By OSIS Telesandi - Development By Syntax Telesandi </p> --}}
                            
                        
                    </div>
                    <div class="col col-12 col-md-4 mt-5 footer-sect justify-content-center">
                        <div class="kontak-footer">
                            <h3 class="section-text-footer text-center">Sponsorship</h3>
                            <hr style="border: 1px solid #323232" width="100px"> 
                                <div class="footer-grid">
                                    <center>
                                        <table class="text-center"> 
@foreach($sponsor as $p)
                                            <tr>
                                                <td  style="width: 200px;"><img src="{{ url('images/partner/'.$p->logo)}}" alt="" class="img-fluid" max-width="100%" width="{{ $p->width }}%"></td>
                                            </tr>
@endforeach

                                        </table>
                                    </center>
                                </div>

                            {{-- <div class="kontak-icon">
                                <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px;"></i><p>Mekarsari Raya Jl. KH. Mochammad, Tambun Selatan Bekasi, Indonesia.</p>
                            </div> --}}
                                
                                
                            
                            {{-- <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; float: le;"></i>
                                    <div class="alamt">
                                        <p>Mekarsari Raya Jl. KH. Mochammad, Tambun Selatan Bekasi, Indonesia.</p>
                                    </div>
                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul> --}}
                        </div>
                        
                    </div>
                    <div class="col col-12 col-md-4 mt-5 footer-sect">
                        <div class="kontak-footer">
                            <h3 class="section-text-footer text-center">Media Partner</h3>
                            <hr style="border: 1px solid #323232" width="100px"> 
                            <div class="footer-grids">
                                <center>
                                    @foreach($media as $p)

                                            <img src="{{ url('images/partner/'.$p->logo)}}" alt="MEDIA Partner" max-width="100%" width="{{ $p->width }}%">
                                    @endforeach
    

                                    {{-- <table class="text-center"> 
@foreach($media as $p)
                                            <tr>
                                                <td style="width: 200px;"><img src="{{ url('images/partner/'.$p->logo)}}" alt="" class="img-fluid" max-width="100%" width="70%"></td>
                                            </tr>
@endforeach
                                    </table> --}}
                                </center>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col col-12 col-md-3 mt-5 footer-sect">-->
                    <!--    <div class="kontak-footer">-->
                    <!--        <h3 class="section-text-footer text-center">Contact</h3>-->
                    <!--    </div>-->
                    <!--    <hr style="border: 1px solid #323232" width="100px"> -->
                    <!--    <div class="footer-grids">-->
                    <!--        <ul>-->
                    <!--            <li>-->
                    <!--                <i class="fas fa-envelope" style="font-size: 20px;"></i>-->
                    <!--                <a href="mailto:telsscup@gmail.com"><p>telsscup@gmail.com</p></a>-->
                    <!--               {{--  <a href="Riiobtrn24@gmail.com"><p>Riiobtrn24@gmail.com</p></a> --}}-->
                    <!--            </li>-->
                    <!--            <li></li>-->
                    <!--            <li></li>-->
                    <!--            <li></li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                    

                </div>
            </div>
            <div class="spacer"></div>
        </section>

        <section class="footer-textt" style="background-color: #363636">
            <div class="container">
                <div class="row">
                    
                        <div class="col col-12 col-md-12 text-center pt-2">
                            <p style="color: #fff;">©{{ date('Y')}}  TELSFESTIVAL - Powered By <a href="https://syntx.id/" class="link-footer">Syntax Tels</a></p>
                        </div>
                    
                </div>
            </div>
        </section>
@endsection

@section('js')

<script>

$(window).scroll(function(){

    var wScroll = $(this).scrollTop();
    if(wScroll > $('.aseqqq').offset().top) {
        $("video").attr("autoplay");

    }
});
</script>

<script>

    // $(window).on('load', function(){
    //     alert( "MANTERP");
    // })



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
</script>

<script>
    $(window).scroll(function(){
        var wScroll = $(this).scrollTop();

        $('.header-content .header-img img').css({
            'transform' : 'translate(0px, '+ wScroll/12 +'%)'
        });

        $('.header-content .title h2').css({
            'transform' : 'translate(0px,'+ wScroll/6 + '%)'
        });
    });
    
</script>

@endsection