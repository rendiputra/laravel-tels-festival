@extends('layouts.form')
@section('css')
<style type="text/css">
            html,
            body{
                font-family: 'Quicksand', sans-serif;
                height: 100%;
                width: 100%;
            }
            .fs{
                height: 100%;
                width: 100%;
            }
            .opc{
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.6);
            }
            .bg{
                background-image: url("https://smkstelekomunikasitelesandi.sch.id/images/tentangkami.jpg");
                background-size: 1920px 1080px;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                /*height: 100%;
                max-width: 100%;
                max-height: 100%;*/
            }
            .centered{
                color:white;
                position: absolute;
                left: 50%; top:50%;
                transform: translate(-50%,-50%);
            }
            .navbar{
              padding: 3px;
              z-index: 2;
              /*background-color: #fff;*/   
              transition: .5s;
              /*box-shadow: 0px 2px 5px #0000001f;*/
            }

            .spacer{
                width: 100%;
                height: 100px;
            }
            .btn{
                border-radius:50px;
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

            .nav-item{
                margin-left: 10px;
                margin-bottom: 10px;
            }

            .input-form:focus{
               outline:0px !important;
                -webkit-appearance:none;
                box-shadow: none !important;
            }
        </style>
@endsection
@section('content')
        <div class="container">
            <div class="spacer"></div>
            <div class="row justify-content-center">
               <center>
                   <div class="col col-12 col-md-6">
                    <div class="card">
                      <img src="https://telsfest.syntx.id/images/back_login.png" class="card-img-top" alt="">
                      <h1 class="card-title" style="font-weight: 700;">LOGIN</h1>
                      <img src="https://telsfest.syntx.id/images/login_icon.png" alt="" class="img-fluid" width="30%" height="auto">
                      <div class="card-body">
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        <form action="{{ route('login') }}" method="post" accept-charset="utf-8" class="text-left">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        {{-- <span>Email :</span> --}}
                                        {{-- <div class="input-login" style="border-bottom: 2px solid black; "> --}}
                                            {{-- <i class="fas fa-users"></i> --}}
                                            
                                            <input id="email" type="email" name="email" class="form-control input-form @error('email') is-invalid @enderror" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" placeholder="name@domain.com" value="{{ old('email') }}">    
                                             @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        <!-- </div> -->
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('Password') }}</label>
                                        {{-- <span>Email :</span> --}}
                                        <input id="password" type="password" name="password" class="form-control input-form  @error('password') is-invalid @enderror" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" placeholder="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="forgot-pass text-right">
                                        <a href=""><p style="color: #747474">Lupa Password?</p></a>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </form>
                                <div class="register text-center" style="margin-top: 120px;">
                                    <p class="mb-0">Belum Punya Akun?</p>
                                    <a href="/register">DAFTAR</a>
                                </div>
                                <div class="spacerr" style="width: 100%; height:30px; "></div>
                      </div>
                    </div>
                   </div>
               </center>
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</section>

@endsection
