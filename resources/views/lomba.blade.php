@extends('layouts.layout2')
@section('title'){{$data->nama_lomba}} -@endsection
@section('css')
<style type="text/css">
    .bg{
		background-image: url('https://telsfest.syntx.id/images/logo/telscup.png');
        background-size: 750px auto;
        background-repeat: no-repeat;
        background-position: center;
    }

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

        .section-desc ul li{
            list-style: none;
        }
        .item .icon-acc .eaea {
        	font-size: 25px;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    color: #fff;
		    -webkit-transform: translate(-50%, -50%);
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
		.icon-acc {
		    position: absolute;
		    content: '';
		    top: 0;
		    left: 0;
		    width: 30px;
		    height: 30px;
		    line-height: 30px;
		    border-radius: 100px;
		    font-size: 14px;
		    text-align: center;
		    background-image: -webkit-gradient(linear, left top, right top, from(#ff512f), to(#dd2476));
		    background-image: -webkit-linear-gradient(left, #ff512f 0%, #dd2476 100%);
		    background-image: -o-linear-gradient(left, #ff512f 0%, #dd2476 100%);
		    background-image: linear-gradient(to right, #ff512f 0%, #dd2476 100%);
		    transition: .5;
		}
		.partners #accordion .item .data h6 {
			font-size: 17px;
			line-height: 30px;
			cursor: default;
		}
		.btn-acc:hover{
			text-decoration: none;
		}
		.card-header .btn-acc .item .icon-acc{
			-webkit-transform: rotate(90deg);
			-moz-transform: rotate(90deg);
			transform: rotate(-90deg);
			transition: .5s;
		} 
		.card-header.active .btn-acc .item .icon-acc{
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			transform: rotate(0deg);
		} 
		 /*.livestreming-class{*/
   /*         background-color: #eeecec;*/
   /*     }*/

		/*.icon-acc .item .icon svg{
			font-family: "FontAwesome";
			content: "\f108";
		}*/
</style>
@endsection
@section('header')
    {{-- <img src="{{ url('images/logo/'.$data->logo_lomba) }}" height="300px">
    <h3 class="text-center">{{ $data->nama_lomba }}</h3> --}}
<div class="opc">
    <div class="centered">
        <div class="container">
            {{-- <div class="spacer"></div> --}}
            <div class="row justify-content-center">
                <div class="col col-12 col-md-10 col-xl-10 col-sm-10 text-center">
                    <div class="content-off-header header-content">
                        {{-- <img src="https://telsfest.syntx.id/images/logo/1567186710.png" height="auto" max-width="100%" width="55%" class="img-fluid mb-2">
                        <h1><b>Story Telling</b></h1> --}}
                        <div class="header-img">
                            <img src="{{ url('images/logo/'.$data->logo_lomba) }}" height="auto" max-width="100%" width="55%" class="img-fluid mb-2">
                        </div>
                        <div class="title">
                            <h2 style="text-transform: uppercase;"><b>{{ $data->nama_lomba }}</b></h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('content')
    <section id="livestreming" class="livestreming-class" name="live">
    		<div class="container">
    			<div class="row">
    				<div class="col col-12 col-md-12 text-center">
    					<div class="lomba header-section">
    						<h4 class="section-text">LIVE <span>STREAMING</span></h4>
    					</div>
    				</div>
    			</div>
    			<div class="row mt-5">
    				<div class="col col-xl-12 col-md-12 col-sm12 col-12 text-center">
    					<iframe width="100%" height="460px" src="https://www.youtube.com/embed/live_stream?channel=12345" frameborder="0" allowfullscreen></iframe>
    				</div>
    			</div>
    		<div class="spacer"></div>
    		</div>

	</section>

    <section id="juknis" class="juknis">
        <div class="container">
            <div class="spacer"></div>
            <div class="row justify-content-center">
                <div class="col col-12 col-md-10 col-xs-10 text-center">
                    <div class="header-section mb-5">
                        <h1 class="section-text">PETUNJUK <span>TEKNIS</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-12 col-md-6 col-xs-6">
                    <div class="section-desc partners">
                       <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                       	 <div class="card" style="border: none;">

						    <!-- Card header -->
						    <div class="card-header" role="tab" id="headingOne1" style="background-color: #fff; border: none;">
						      <a class="btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne0" aria-expanded="true"
						        aria-controls="collapseOne0">

						        <div class="item" style="position: relative; padding-left: 45px;">
						        	 <div class="icon-acc asade">
							        	<i class="fas fa-angle-down rotate-icon eaea"></i>						        		
							        </div>
							         <h6 class="section-text mb-0" style="font-size: 25px;">
							       
							        	PENDAFTARAN
							        	
							        </h6>
						        </div>
						        
						       
						        {{-- <h5 class="mb-0">
						          Collapsible Group Item #1 
						        </h5> --}}
						      </a>
						    </div>

						    <!-- Card body -->
						    <div id="collapseOne0" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
						      <div class="card-body">
						      	<ul>
						          <li>
						          	<h6 style="color: #404040"><b>TANGGAL :</b></h6>
						          		{!! $data->pendaftaran !!}
			                        	{{-- <ul>
			                            	<li>2 September 2019 &ndash; 11 November 2019</li>
			                        	</ul> --}}
			                    	</li>
			                    	<li>
						          	<h6 style="color: #404040"><b>BIAYA PENDAFTARAN :</b></h6>
			                    		<ul>
											<li>Rp.{{ number_format($data->biaya_pendaftaran) }}</li>
										</ul>
			                    	</li>
						      	</ul>
						      </div>
						    </div>

						  </div>

						  <!-- Accordion card -->
						  <div class="card" style="border: none;">

						    <!-- Card header -->
						    <div class="card-header active" role="tab" id="headingOne1" style="background-color: #fff; border: none;">
						      <a class="btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
						        aria-controls="collapseOne1">

						        <div class="item" style="position: relative; padding-left: 45px;">
						        	 <div class="icon-acc asade">
							        	<i class="fas fa-angle-down rotate-icon eaea"></i>						        		
							        </div>
							         <h6 class="section-text mb-0" style="font-size: 25px;">
							       
							        	TECHNICAL MEETING 
							        	
							        </h6>
						        </div>
						        
						       
						        {{-- <h5 class="mb-0">
						          Collapsible Group Item #1 
						        </h5> --}}
						      </a>
						    </div>

						    <!-- Card body -->
						    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
						      <div class="card-body">
						      	{!! $data->tm !!}
						      	{{-- <ul>
						          <li>
						          	<h6 style="color: #404040"><b>HARI & TANGGAL :</b></h6>
			                        	<ul>
			                            	<li>Kamis, 14 November 2019</li>
			                        	</ul>
			                    	</li>
						          <li>
						          	<h6 style="color: #404040"><b>WAKTU :</b></h6>
			                        <ul>
			                            <li>10.00 &ndash; selesai</li>
			                        </ul>
						          </li>
						          <li>
						          	<h6 style="color: #404040"><b>TEMPAT :</b></h6>
			                        <ul>
			                            <li>AULA SMK Telekomunikasi Telesandi Bekasi</li>
			                        </ul>
						          </li>
						      	</ul> --}}
						      </div>
						    </div>

						  </div>
						  <!-- Accordion card -->

						  <!-- Accordion card -->
						  <div class="card" style="border: none;">

						    <!-- Card header -->
						    <div class="card-header" role="tab" id="headingTwo2" style="border: none; background-color: #fff;">
						      <a class="collapsed btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
						        aria-expanded="false" aria-controls="collapseTwo2">
						         <div class="item" style="position: relative; padding-left: 45px;">
						        	 <div class="icon-acc asade">
							        	<i class="fas fa-angle-down rotate-icon eaea"></i>						        		
							        </div>
							         <h6 class="section-text mb-0" style="font-size: 25px;">
							       
							        	PELAKSANAAN PERLOMBAAN
							        	
							        </h6>
						        </div>
						      </a>
						    </div>

						    <!-- Card body -->
						    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
						      <div class="card-body">
								{!! $data->lomba !!}

						       {{-- <ul>
						          <li>
						          	<h6 style="color: #404040"><b>HARI & TANGGAL :</b></h6>
			                        	<ul>
			                            	<li>Sabtu, 16 November 2019</li>
			                        	</ul>
			                    	</li>
						          <li>
						          	<h6 style="color: #404040"><b>WAKTU :</b></h6>
			                        <ul>
			                            <li>12.00 &ndash; selesai</li>
			                        </ul>
						          </li>
						          <li>
						          	<h6 style="color: #404040"><b>TEMPAT :</b></h6>
			                        <ul>
			                            <li>AULA SMK Telekomunikasi Telesandi Bekasi</li>
			                        </ul>
						          </li> --}}
						      	</ul>
						      </div>
						    </div>
						  </div>


						  <!-- Accordion card -->
						  <div class="card" style="border: none;">

						    <!-- Card header -->
						    <div class="card-header" role="tab" id="headingTwo2" style="border: none; background-color: #fff;">
						      <a class="collapsed btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo3"
						        aria-expanded="false" aria-controls="collapseTwo3">
						         <div class="item" style="position: relative; padding-left: 45px;">
						        	 <div class="icon-acc asade">
							        	<i class="fas fa-angle-down eaea"></i>
							        	{{-- <i class="fas fa-angle-down eaea"></i> --}}					        		
							        </div>
							         <h6 class="section-text mb-0" style="font-size: 25px;">
							       
							        	KONTAK PERSON
							        	
							        </h6>
						        </div>
						      </a>
						    </div>

						    <!-- Card body -->
						    <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
						      <div class="card-body">
						      	<ul>
						      	    <li>
						      	    	<h6 style="color: #404040"><b>No. Hp / Whatsapp :</b></h6>
						      	    	<ul>

										<?php
											function getStr($string,$start,$end){
											    $str = explode($start,$string);
											    $str = explode($end,$str[1]);
											    return $str[0];
											}


											$no1 = getStr('//'.$data->cp_1, '//', ' (');
											$no2 = getStr('//'.$data->cp_2, '//', ' (');
										?>

			                            	<li><a href="https://wa.me/62{{ $no1 }}" target="_blank">&ndash; {{ $data->cp_1 }}</a></li>
			                            	<li><a href="https://wa.me/62{{ $no2 }}" target="_blank">&ndash; {{ $data->cp_2 }}</a></li>
			                        	</ul>
						      	    </li>
						      	</ul>
						      	
						      </div>
						    </div>
						  </div>
						</div>
						<!-- Accordion wrapper -->

                        {{-- {!! $data->juknis !!} --}}
                        
                    </div>
                </div>
                <div class="col col-12 col-md-5 col-xs-5">
                    <div class="img-juknis">
                        <center>
                            <img src="https://telsfest.syntx.id/images/Juknis.png" alt="IMG JUKNIS" height="auto" width="80%" max-width="100%">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="syarat" id="syarat" {{-- style="background-color: #E7E7E7; --}}">
        <div class="container">
            <div class="spacer"></div>
            <div class="row justify-content-center">
                <div class="col col-12 col-md-10 col-xs-10 text-center">
                    <div class="header-section mb-5">
                        <h1 class="section-text">PERSYA<span>RATAN</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-12 col-md-5 col-xs-5">
                    <div class="img-presyaratan">
                        <center>
                            <div class="spacer"></div>
                            <img src="https://telsfest.syntx.id/images/syarat.png" alt="IMG PERSYARATAN" height="auto" width="80%" max-width="100%">
                        </center>
                    </div>
                </div>
                <div class="col col-12 col-md-7 col-xs-7">
                    <div class="section-desc">
                        {{-- <ol>
                            <li>Peserta lomba adalah anak SMP sederajat</li>
                            <li>Karena ini merupakan lomba yang bersifat individu, maka setiap sekolah di batasi 2&nbsp;orang untuk mengikuti lomba Story Telling ini.</li>
                            <li>&nbsp;Mengisi formulir pendaftaran setelah melakukan pendaftaran terlebih dahulu ke panitia lomba.</li>
                            <li>Tempat lomba akan dilaksanakan di SMK Telekomunikasi Telesandi Bekasi.</li>
                            <li>Peserta wajib menyerahkan foto ukuran 3x4 (2 lembar), fotocopy rapot (1 lembar), surat keterangan dari sekolah, dan fotocopy kartu pelajar (1 lembar).</li>
                            <li>Siapkan 2 cerita dan mengcopy naskah cerita yang akan ditampilkan sebanyak 3 kali untuk diserahkan kepada masing-masing dewan juri.</li>
                            <li>Naskah cerita yang akan ditampilkan harus diserahkan ke panitia selambatlambatnya pada saat technical meeting.</li>
                            <li>Tema cerita berkaitan tentang legenda.</li>
                            <li>Keputusan juri mutlak dan tidak dapat diganggu gugat.</li>
                            <li>Selama perlombaan berlangsung, peserta harus berpakaian rapi, sopan, serta menjaga kebersihan dan ketertiban.</li>
                            <li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>
                        </ol> --}}
                        {!! $data->syarat !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
    </section>
    <section class="daftar_lombaa">
        {{-- <div class="spacer"></div> --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-12 col-md-10 col-xs-10 text-center">
@php
	$now = date('Y-m-d');
	$close = date('Y-m-d',strtotime($data->akhir_daftar));
@endphp
	@if($now >= $close)
					<h4>Mohon maaf, Pendaftaran telah ditutup.</h4>
					<p>Sampai ketemu di Telesandi Cup berikutnya!</p>
	@else
	                <div class="row justify-content-center">
                        <div class="col col-md-8">
                            <a href="{{ route('daftar_lomba',$data->id_bidang_lomba) }}" class="btn btn-primary btn-lg btn-block">Daftar Lomba</a>
                        </div>
                        <div class="col col-md-4">
                            <a href="{{ url('juknis/Undangan.pdf') }}" class="btn btn-info btn-lg btn-block">Download Formulir</a>
                        </div>
                    </div>
                    {{-- <a href="" class="btn btn-primary btn-lg btn-block">Ikut Lomba</a> --}}
    @endif     
                </div>
            </div>
        </div>
        <div class="spacer"></div>
    </section>
    <section class="footer-textt" style="background-color: #363636">
            <div class="container">
                <div class="row">
                    
                        <div class="col col-12 col-md-12 text-center pt-2">
                            <p style="color: #fff;">2019 © TELSFESTIVAL - Powered By Syntax Tels</p>
                        </div>
                    
                </div>
            </div>
        </section>


  {{--   <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-12 col-sm-10 col-md-10 col-xl-10">
                    <div class="header-section">
                        <h1 class="section-text">PETUNJUK <span>TEKNIS</span></h1>
                    </div>
            </div>
        </div>
    </section> --}}
        {{-- <section>
            <h5>DAFTAR?</h5>
            <a href="{{ route('daftar_lomba',$data->id_bidang_lomba) }}">Disini aja!</a>
        </section> --}}
@endsection

@section('js')


 <script>
            // Select all links with hashes
	$('a[href*="#juknis"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
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
	$('a[href*="#syarat"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
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

<script>
	 $('.collapse').on('show.bs.collapse', function () {
	    $(this).siblings('.card-header').addClass('active');
	  });

	  $('.collapse').on('hide.bs.collapse', function () {
	    $(this).siblings('.card-header').removeClass('active');
	  });
</script>

@endsection