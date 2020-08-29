<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') Telesandi Festival</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600|Lexend+Deca|Quicksand:200,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://telsfest.syntx.id/bootstrap4/css/bootstrap.min.css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/all.min.css">
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://telsfest.syntx.id/css/v4-shims.min.css">
       <link rel="stylesheet" href="https://syntx.id/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://syntx.id/assets/owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://telsfest.syntx.id/css/animate.css">
    <link rel="icon" href="https://telsfest.syntx.id/images/logo/festcup.png">


        <style type="text/css">
        	html,
        	body{
        		height: 100%;
        		width: 100%;
        	}
        	.fs{
        		height: auto;
        		width: 100%;
                overflow: hidden;
        	}
        	.opc{
        		width: 100%;
        		height: 100%;
        		background-color: rgba(0,0,0,0.5);
        	}
            .opcs{
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.85);
            }
        	.bg{
        		background-image: url(images/lap1.jpg);
        		background-size: cover;
  				background-attachment: fixed;
        		width: 100%;
        		height: 100%;
        	}
        	.telsfest{
        		background-color: #F0F0F0;
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
        	.btn{
        		padding-left: 20px;
        		padding-right: 20px;
        		border-radius: 20px;
        	}

        	/*.item img{
        		height: 250px;
        		width: auto;
        		max-height: 250px;

        	}*/
            .header-content .title{
                font-family: 'Poppins', sans-serif;
                color: #fff;
                font-size: 50px;
                font-style: italic;
                font-weight: 700;
            }
            .section-title {
                color: #dd2476;
                font-family: Poppins;
                font-size: 15px;
                font-weight: 600;
                margin-bottom: 10px;
                letter-spacing: 2px;
                text-transform: uppercase;
            }
            .section-text {
                color: #FFF;
                font-family: Poppins;
                font-size: 32px;
                font-weight: 700;
                padding-bottom: 10px;
                line-height: 38px;
            }
/*
            .contact-text{
                
            }*/
            .section-desc {
                font-family: Poppins;
                color: #FFF;
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
                background: -webkit-gradient(linear, left top, left bottom, color-stop(30%, #ff512f), to(#dd2476));
                background: -webkit-linear-gradient(top, #ff512f 30%, #dd2476 100%);
                    background-clip: border-box;
                background: -o-linear-gradient(top, #ff512f 30%, #dd2476 100%);
                background: transparent, linear-gradient(to bottom, #ff512f 30%, #dd2476 100%);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            /*.card_portofolio {
                
            }*/
            .section-desc-team{
                font-family: Poppins;
                color: #FF5C5C;
                font-size: 18px;
                font-weight: 700;
                margin-bottom: 15px;
                /*line-height: 28px;*/
                letter-spacing: 0.7px;
            }

            .card-team{
                margin-top: 3rem;
                width: 90%;
                height: 270px;
                background-color: white;
                border-radius: 20px;
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);
                padding: 30px;
                margin-bottom: 20px;
                transition: 1s;
                position: relative;
                overflow: hidden;
            }
            /*.owl-nav .owl-prev, .owl-next{
                display: none;
            }*/

            .section-text-footer{
                font-family: Poppins;
                color: #FFFFFF;
                font-size: 18px;
                font-weight: 500;
                margin-bottom: 15px;
                /*line-height: 28px;*/
                letter-spacing: 0.7px;
            }
            .section-text-footer-logo{
                font-family: Poppins;
                color: #FFFF;
                font-size: 18px;
                font-weight: 700;
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

            .img-abaut img {
              margin-bottom: 20px;
              position: relative;
              opacity: 0;
              transform: translateX(20px);
              transition: all 0.3s ease-in-out; 
            }

            .img-abaut img.is-showing {
                opacity: 1;
                transform: translateX(0px); 
            }

            .header-section p {
              margin-bottom: 20px;
              position: relative;
              opacity: 0;
              transform: translateX(20px);
              transition: all 0.3s ease-in-out; 
            }

            .header-section p.is-showing {
                opacity: 1;
                transform: translateX(0px); 
            }

             .header-section h4 {
              margin-bottom: 20px;
              position: relative;
              opacity: 0;
              transform: translateX(20px);
              transition: all 0.3s ease-in-out; 
            }

            .header-section h4.is-showing {
                opacity: 1;
                transform: translateX(0px); 
            }

            .header-section h3 {
              margin-bottom: 20px;
              position: relative;
              opacity: 0;
              transform: translateX(20px);
              transition: all 0.3s ease-in-out; 
            }

            .header-section h3.is-showing {
                opacity: 1;
                transform: translateX(0px); 
            }

            .logo-contact img{
                margin-bottom: 20px;
              position: relative;
              opacity: 0;
              transform: translateX(20px);
              transition: all 0.3s ease-in-out; 
            }

            .logo-contact img.is-showing{
                opacity: 1;
                transform: translateX(0px);
            }

            #about{
                background-image: url('https://telsfest.syntx.id/images/logo/festcup.png');

                /*filter: blur(0.5px);
                -webkit-filter: blur(8px);*/
                background-size: 920px 650px;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center;
            }
            .link-header a{
                font-family: 'Quicksand';

            }

            .form-contact form{
                margin-bottom: 20px;
              position: relative;
              opacity: 0;
              transform: translateX(20px);
              transition: all 0.3s ease-in-out; 
            }

            .form-contact form.is-showing{
                opacity: 1;
                transform: translateX(0px);
            }

            a.disabled {
              pointer-events: none;
              cursor: default;
            }

            .contact-section h3{
                margin-bottom: 20px;
              position: relative;
              opacity: 0;
              transform: translateX(20px);
              transition: all 0.3s ease-in-out; 
            }

            .contact-section h3.is-showing{
                opacity: 1;
                transform: translateX(0px);
            }

            .form-contacts .form-group input, .form-contact .form-group textarea{
                border-radius: 30px;
                box-shadow: 0px 2px 5px #00000012;
                background-color: #F0F0F0;
                border: 1px solid #F0F0F0;
                /*color: white;*/
            }
            .form-contacts .form-group input:hover, .form-contact .form-group textarea:hover{

                background-color: #D5D5D5;
                /*border: 1px solid #F0F0F0;*/
                /*color: white;*/
            }
            .owl-teamm{
                margin-bottom: 20px;
                position: relative;
                opacity: 0;
                transform: translateX(20px);
                transition: all 0.3s ease-in-out;
            }

            .owl-drag.is-showing{
                opacity: 1;
                transform: translateX(0px);
            }

            .logo-footer img, .logo-footer h4{
                margin-bottom: 20px;
                position: relative;
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.3s ease-in-out;
            }

            .logo-footer img.is-showing, .logo-footer h4.is-showing{
                opacity: 1;
                transform: translateY(0px);
            }

            .kontak-footer h3, .kontak-footer hr, .footer-grids ul li{
                margin-bottom: 20px;
                position: relative;
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.5s ease-in-out
            }

            .kontak-footer h3.is-showing, .kontak-footer hr.is-showing, .footer-grids ul li.is-showing{
                opacity: 1;
                transform: translateY(0px);
            }
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



            .link-footer{
              color: #03A1E3;
            }
            .link-footer:hover{
              color: #076ECE;
              text-decoration: none;
            }

    
        </style>
    </head>
    <body>
        <section id="loading">
            <div class="loading">
                <center>    
                <img src="https://telsfest.syntx.id/images/logo/loading2.png" alt="loading" width="120px" height="auto" class="objs">
              </center>
            </div>
        </section>
    	<section class="fs animated fadeIn" id="header">
            
    		<div class="bg">
    			<div class="opc">
                    <div class="container-fluid">
                        <div class="row pt-3">
                            <div class="col-6 col-md-5 offset-md-1">
                                <div class="item-logo">
                                    <img src="https://smkstelekomunikasitelesandi.sch.id/images/logosekolah.png" class="img-fluid" width="20%">
                                </div>
                            </div>
                            <div class="col-6 col-md-5 text-right animated zoomInDown">
                                <div class="item-logo">
                                    <img src="https://telsfest.syntx.id/images/com/lambang-osis.png" class="img-fluid" width="15%">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-12 text-center">
                                <div class="header-content">
                                    <h1 class="title">TELESANDI FESTIVAL</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-top: 50px;">
                            <div class="pad col col-md-6 text-center mb-5">
                                <div class="item-header">
                                    <img src="https://telsfest.syntx.id/images/com/bigges-coming.png" class="img-fluid" max-width="100%" width="45%">
                                    <div style="width: 100%;" class="text-center link-header">
                                        <a href="#" class="btn btn-primary disabled">BIGGEST</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pad col col-md-6 col-sm-12 col-12 text-center">
                                 <div class="item-header">
                                    <img src="https://telsfest.syntx.id/images/com/telscup.png" class="img-fluid" max-width="250px" width="43%">
                                    <div style="width: 100%;" class="text-center link-header">
                                        <a href="/cup" class="btn btn-primary">TELESANDI CUP</a>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer"></div>
                        </div>
                    </div>
    			</div>
    		</div>
            {{-- <div class="spacer"></div> --}}
    	</section>
    	<section id="about">
            <div class="opcs">
    		<div class="spacer"></div>
    		<div class="container">
    			<div class="row justify-content-center">
    				<div class="col col-md-6 col-sm-12 col-12 text-center d-flex">
                        <div class="img-abaut mb-3">
    					   <img class="align-self-center" src="https://telsfest.syntx.id/images/com/festcup.png" width="85%" height="auto" class="img-fluid">
                        </div>
    				</div>
    				<div class="col col-md-6 col-sm-12 col-12" {{-- style="background-color: #f0f0f0; border-radius: 10px;" --}}>
                        <div class="header-section"><br>
                            <p class="section-title">About</p>
                            <h4 class="section-text text-left">
                                Telesandi Festival
                                {{-- <hr style="width: 400px; background-color: #000; margin-left: 5px; max-width: 100%;" class="text-left"> --}}
                            </h4>
                            <p class="section-desc">
                                <span><b>TELESANDI FESTIVAL</b></span> Merupakan sebuah acara yang diselenggarakan oleh<span> OSIS SMK TELEKOMUNIKASI TELESANDI BEKASI</span> yang mempunyai 2 acara yaitu <span>TELESANDI CUP</span> dan <span>BIGGEST</span>
                            </p><p class="section-desc">
                                <span><b>TELESANDI CUP</b></span> Merupakan Ajang perlombaan yang diperlombakan oleh SMK TELEKOMUNIKASI TELESANDI BEKASI untuk <span>SEMUA PELAJAR</span>
                            </p>
                            <p class="section-desc footer-text-desc-sec"> 
                                <span><b>BIGGEST</b></span> Merupakan Singkatan dari <span><i> BELIEVE IN GREAT GENERATION STUDY OF TELESANDI</i></span> Sebagai acara puncak Telesandi festival
                            </p>
                        </div>
    			</div>
    		</div>
            </div>
    		<div class="spacer"></div>
    	</section>
        <section id="team" style="background-color: #eeecec;">
            <div class="spacer"></div>
            <div class="container">
                <div class="row {{-- justify-content-center --}}">
                    <div class="col col-md-12 text-center">
                        <div class="header-section">
                            <h3 class="section-text" style="color: #000;">TEAM <span>TELESANDI </span>FESTIVAL 2019</h3>
                            {{-- <hr> --}}
                        </div>
                        {{-- <h1>Telesandi Festival Team 2019</h1> --}}
                    </div>
                </div>

                <center class="owl-center-team">
                    {{-- <div class="spacer"></div> --}}
                   <div class="owl-carousel owl-theme nonloop owl-teamm">
                    <div class="item">
                        <a href="https://www.instagram.com/osistels/" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://telsfest.syntx.id/images/com/lambang-osis.png" alt="logo" style="position: relative; width: 100px; height: auto; top: 20px;"> 
                                <br>
                                
                                <h5 style="color: #2b2be8;">OSIS</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://syntx.id" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://syntx.id/images/logo.png" alt="logo" style="position: relative; width: 100px; height: auto; top: 20px;"> 
                                <br>
                                <br>
                                <h5 style="color: #2b2be8;">Syntax</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    
                    <div class="item">
                        <a href="https://instagram.com/senimedia_/" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://telsfest.syntx.id/images/com/logo-senmed.png" alt="logo" style="position: relative; width: 100px; height: 100px; top: 20px;"> 
                                <br>
                                <br>
                                <h5 style="color: #2b2be8;">Seni Media</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.instagram.com/tomcatsquad_/" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://instagram.fcgk18-1.fna.fbcdn.net/vp/0f0d564149167dc299dc77bf5777ae95/5E01CEE6/t51.2885-19/s150x150/13098887_970029576449789_485468000_a.jpg?_nc_ht=instagram.fcgk18-1.fna.fbcdn.net" alt="logo" style="position: relative; width: 100px; height: auto; top: 20px;" class="mb-5"> 
                              
                                <h5 style="color: #2b2be8;">Tomcat</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.instagram.com/tels.magazine/" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://instagram.fcgk8-1.fna.fbcdn.net/vp/fc6ed95b07cdec4d34ca6ae5512740e1/5E009137/t51.2885-19/s150x150/38081307_1046371015519568_7513047035168161792_n.jpg?_nc_ht=instagram.fcgk8-1.fna.fbcdn.net&amp;_nc_cat=108" alt="logo" style="position: relative; width: 100px; height: auto; top: 20px;"> 
                                <br>
                                <br>
                                <h5 style="color: #2b2be8;">Tels Magazine</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.instagram.com/traditels/" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://instagram.fcgk18-2.fna.fbcdn.net/vp/831b5f0fa708de547f823057c8007215/5E002612/t51.2885-19/s150x150/20393974_1951178221570888_8546787634012225536_a.jpg?_nc_ht=instagram.fcgk18-2.fna.fbcdn.net&amp;_nc_cat=104" alt="logo" style="position: relative; width: 100px; height: auto; top: 20px;"> 
                                <br>
                                <br>
                                <h5 style="color: #2b2be8;">Traditels</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.instagram.com/ec.tels/" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://instagram.fcgk18-1.fna.fbcdn.net/vp/3fad12e4cb1123091b5ffd986ce9da1c/5DFBA568/t51.2885-19/s150x150/51757369_250075455910857_3482062280449851392_n.jpg?_nc_ht=instagram.fcgk18-1.fna.fbcdn.net&amp;_nc_cat=109" alt="logo" style="position: relative; width: 100px; height: auto; top: 20px;"> 
                                <br>
                                <br>
                                <h5 style="color: #2b2be8;">English Club</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://telsfest.syntx.id/images/fotball-tels.png" alt="logo" style="position: relative; width: 100px; height: auto; top: 10px;">
                                <h5 style="color: #2b2be8;">Telesandi Football</h5>
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.instagram.com/futsaltels2008/" class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://telsfest.syntx.id/images/Futsall.png" alt="logo" style="position: relative; width: 100px; height: auto; top: 20px;"> 
                                <br>
                                <br>
                                <h5 style="color: #2b2be8;">Futsal Telesandi</h5> 
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>
                     <div class="item">
                        <a href=https://www.instagram.com/ultrastelkom74/ class="alink-team">
                            <div class="card_team card-team">
                                <img src="https://instagram.fcgk8-1.fna.fbcdn.net/vp/0fb4d14822257a9dfcd77969dc5f4990/5E138CC6/t51.2885-19/s150x150/12338560_715521198579512_426521780_a.jpg?_nc_ht=instagram.fcgk8-1.fna.fbcdn.net&amp;_nc_cat=108 alt=logo" style="position: relative; width: 100px; height: auto; top: 20px;"> 
                                <br>
                                <br>
                                <h5 style="color: #2b2be8;">Ultras Telkom</h5> 
                                <p style="font-size: .8em; color: black;">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                             {{--  <a href="https://play.google.com/store/apps/details?id=id.telesandi.bekasiguide&hl=en" class="btn btn-primary btn-portofolio">Detail</a> --}}
                            </div>
                        </a>
                    </div>

                   </div>

                </center>
            </div>
            <div class="spacer spacerrr"></div>
        </section>
        <section id="contact" style="background-color: #fff;">
            <div class="spacer"></div>
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-12">
                        <div class="contact-section">
                            <h3 class="section-text text-center" style="color: #000;">SARAN & <span>KOMENTAR</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-5 offset-md-1">
                        <center>
                            <div class="logo-contact">
                                <img src="https://telsfest.syntx.id/images/contact2.png" alt="" class="img-fluid" max-width="100%" width="99%">
                            </div>
                        </center>
                    </div>

                    <div class="col col-12 col-md-5 offset-md-1 mt-2 form-contact">
    @if(Session::get('sukses_sarkom'))
                        <div class="alert alert-primary">
                            {{ Session::get('sukses_sarkom') }}
                        </div>
    @endif
                        <form action="{{ route('sarkom') }}" method="post" accept-charset="utf-8" class="form-contacts" style="margin-top: 20px;">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" name="nama" class="form-control" id="nama" style="padding-left:20px;padding-right:20px;">
                            </div>
                             <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" id="email" style="padding-left:20px;padding-right:20px;">
                            </div>
                             <div class="form-group contact-saran">
                                <label for="saran">Saran Dan Komentar :</label>
                                <textarea name="saran" class="form-control" id="saran" cols="100%" rows="4" style="padding-left:20px;padding-right:20px;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="spacer"></div>
        </section>
        <section class="footer" style="background-color: #4D4D4D;">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-3 text-center">
                        <div class="logo-footer mt-5">

                            <img src="https://telsfest.syntx.id/images/logo/festcup.png" alt="" class="img-fluid" max-width="100%" width="80%">
                            <h4 class="section-text-footer"><a href="" class="section-text-footer-logo">TELSCUP</a> - <a href="" class="section-text-footer-logo">BIGGEST</a></h4>
                        </div>
                            
                            {{-- <p>Copyright 2019 - Powered By OSIS Telesandi - Development By Syntax Telesandi </p> --}}
                            
                        
                    </div>
                    <div class="col col-12 col-md-3 mt-5 footer-sect">
                        <div class="kontak-footer">
                            <h3 class="section-text-footer text-center">Kontak Kami</h3>
                            <hr style="border: 1px solid #323232" width="100px"> 
                            <div class="footer-grids">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px;"></i>
                                        <p>
                                            Mekarsari Raya Jl. <span>KH. Mochammad, Tambun Selatan Bekasi, Indonesia.</span>    
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone-alt" style="font-size: 20px;"></i>
                                        <p>
                                            (+62)21 88332404 (Telp) <span>(+62)81282335099 (Pak Mardoto)</span><span>(+62)812-9069-2005 (Whatsapp)</span>
                                        </p>
                                    </li>
                                </ul>
                                {{-- <table>
                                    <tr>
                                        <td><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px;"></i></td>
                                        <td>Mekarsari Raya Jl. KH. Mochammad, Tambun Selatan Bekasi, Indonesia.</td>
                                    </tr>
                                </table> --}}
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
                    <div class="col col-12 col-md-3 mt-5 footer-sect">
                        <div class="kontak-footer">
                            <h3 class="section-text-footer text-center">Sosial Media</h3>
                            <hr style="border: 1px solid #323232" width="100px">
                            <div class="footer-grids">
                                <ul>
                                    <li>
                                        <i class="fab fa-instagram" style="font-size: 25px;"></i>
                                        <a href="https://instagram.com/telesandi.festival" target="_blank"><p>Instagram</p></a>
                                    </li>
                                    <li>
                                        <i class="fab fa-youtube" style="font-size: 25px;"></i>
                                        <a href=""><p>Youtube</p></a>
                                    </li>
                                    {{-- <li>
                                        <i class="fab fa-twitter" style="font-size: 25px;"></i>
                                        <a href=""><p>Twitter</p></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-3 mt-5 footer-sect">
                        <div class="kontak-footer">
                            <h3 class="section-text-footer text-center">Email</h3>
                            <hr style="border: 1px solid #323232" width="100px"> 
                            <div class="footer-grids">
                                <ul>
                                    <li>
                                        <i class="fas fa-envelope" style="font-size: 20px;"></i>
                                        <a href="mailto:telsscup@gmail.com"><p>telsscup@gmail.com</p></a>
                                       {{--  <a href="Riiobtrn24@gmail.com"><p>Riiobtrn24@gmail.com</p></a> --}}
                                    </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    

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
       



{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
<script src="https://telsfest.syntx.id/js/v4-shims.min.js"></script>
<script src="https://telsfest.syntx.id/js/all.min.js"></script>
<script src="https://telsfest.syntx.id/js/fontawesome.min.js"></script>
<script src="https://syntx.id/assets/vendors/jquery.min.js"></script>
<script src="https://syntx.id/assets/owlcarousel/owl.carousel.js"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="https://telsfest.syntx.id/js/v4-shims.min.js"></script> --}}

<script>
    $(document).ready(function(){
        $('#btn_reset').click(function(){
            document.getElementById('nama').value = "";
            document.getElementById('email').value = "";
            document.getElementById('saran').value = ""; 
        });
    });
</script>
<script>
var owl = $('.owl-carousel');
$('.owl-carousel').owlCarousel({
  loop:false,
  margin:10,
  // nav:true,
  autoplay:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
})


</script>

<script>

$(window).scroll(function(){
    var wScroll = $(this).scrollTop();


    $('.item-logo img').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    });

     $('.header-content h1').css({
        'transform' : 'translate(0px, '+ wScroll/3 +'%)'
    });

    $('.item-header img').css({
        'transform' : 'translate(0px, '+ wScroll/12 +'%)'
    });

    $('.link-header a').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    });





if(wScroll > $('.item-header').offset().top) {

    //console.log("HI");

    $('.img-abaut img').each(function(i){
      setTimeout(function(){
        $('.img-abaut img').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });

    $('.header-section p').each(function(i){
      setTimeout(function(){
        $('.header-section p').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });

    $('.header-section h4').each(function(i){
      setTimeout(function(){
        $('.header-section h4').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });

}

if(wScroll > $('.footer-text-desc-sec').offset().top){
    $('.header-section h3').each(function(i){
      setTimeout(function(){
        $('.header-section h3').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });


    $('.owl-teamm').each(function(i){
      setTimeout(function(){
        $('.owl-teamm').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });

    // $('.owl-center-team').each(function(i){
    //   setTimeout(function(){
    //     $('.owl-center-team').eq(i).addClass('is-showing');
    //   }, 150 * (i+1));
    // });
}

if(wScroll > $('.owl-dots').offset().top){

    $('.contact-section h3').each(function(i){
        setTimeout(function () {
            $('.contact-section h3').eq(i).addClass('is-showing');
        }, 150 * (i+1));
    });

    $('.logo-contact img').each(function(i){
        setTimeout(function(){
            $('.logo-contact img').eq(i).addClass('is-showing');
        }, 150 * (i+1));
    });

    $('.form-contact form').each(function(i){
        setTimeout(function(){
            $('.form-contact form').eq(i).addClass('is-showing');
        }, 150 * (i+1));
    });    
}

if(wScroll > $('.contact-saran').offset().top){

    $('.logo-footer img, .logo-footer h4').each(function(i){
        setTimeout(function () {
            $('.logo-footer img, .logo-footer h4').eq(i).addClass('is-showing');
        }, 150 * (i+1));
    });

    $('.kontak-footer h3, .kontak-footer hr, .footer-grids ul li').each(function(i){
        setTimeout(function () {
            $('.kontak-footer h3, .kontak-footer hr, .footer-grids ul li').eq(i).addClass('is-showing');
        }, 150 * (i+1));
    });



}



});

</script>
    
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
