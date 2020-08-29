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
        background-image: url("https://smkstelekomunikasitelesandi.sch.id/images/slider/2.jpg");
        /*background-size: 1920px 1080px;*/
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        /*max-height: 100%;*/
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
    textarea:focus{
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
                      <img src="https://telsfest.syntx.id/images/bg-register.png" class="card-img-top" alt="...">
                      <h1 class="card-title" style="font-weight: 700;">DAFTAR AKUN</h1>
                        <img src="https://telsfest.syntx.id/images/regis-icon.png" alt="" class="img-fluid" max-width="100%" width="30%" height="auto">
                      <div class="card-body">
                       {{--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                       <form action="{{ route('register') }}" method="post" accept-charset="utf-8" class="text-left">
                            @csrf
                            <div class="form-group">
                                <label for="nama">{{ __('Name') }} Pendaftar</label>
                                    
                                    <input id="nama" type="text" name="name" class="form-control input-form @error('name') is-invalid @enderror" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" {{-- placeholder="John Doe" --}} value="{{ old('name') }}" required autocomplete="name" autofocus>    
                                      @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <!-- </div> -->
                                
                            </div>
                            <div class="form-group">
                                <label for="sekolah">Nama Sekolah / Nama Team</label>
                                {{-- <span>Email :</span> --}}
                                <input id="sekolah" type="text" name="nama_sekolah" class="form-control input-form @error('nama_sekolah') is-invalid @enderror" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" {{-- placeholder="SMK TELEKOMUNIKASI TELESANDI BEKASI" --}} value="{{ old('nama_sekolah') }}" required autocomplete="nama_sekolah" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label for="alamat_sekolah">Alamat Sekolah</label>
                                <textarea id="alamat_sekolah" name="alamat_sekolah" class="form-control @error('alamat_sekolah') is-invalid @enderror" rows="4" style="border-radius: 0px; border:none; border-bottom: 2px solid #A0A0A0;" {{-- placeholder="Jl. Pulau Jawa" --}} required autocomplete="name" autofocus>{{ old('alamat_sekolah') }}</textarea>
                                {{-- <span>Email :</span> --}}
                                {{-- <texarea id="sekolah" type="text" name="nama_sekolah" class="form-control input-form" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" placeholder="SMK TELEKOMUNIKASI TELESANDI BEKASI"></texarea> --}}
                                @error('alamat_sekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_number">No. Telp</label>
                                {{-- <span>Email :</span> --}}
                                <input id="phone_number" type="number" name="phone_number" class="form-control input-form @error('phone_number') is-invalid @enderror" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" {{-- placeholder="08xxxxxxx" --}} value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                {{-- <span>Email :</span> --}}
                                <input id="email" type="email" name="email" class="form-control input-form @error('email') is-invalid @enderror" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" {{-- placeholder="name@domain.com" --}} value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                {{-- <span>Email :</span> --}}
                                <input id="password" type="password" name="password" class="form-control input-form @error('password') is-invalid @enderror" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" {{-- placeholder="Password" --}} required autocomplete="new-password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                {{-- <span>Email :</span> --}}
                                <input id="password-confirm" type="password" name="password_confirmation" class="form-control input-form" style="border: none; border-bottom: 2px solid #A0A0A0; border-radius: 0px;" {{-- placeholder="ReType-Password" --}}>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="forgot-pass text-right">
                                <a href=""><p style="color: #747474">Lupa Password?</p></a>
                            </div> --}}
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                        </form>
                        <div class="register text-center" style="margin-top: 120px;">
                            <p class="mb-0">Sudah Punya Akun?</p>
                            <a href="/login">MASUK</a>
                        </div>
                        <div class="spacerr" style="width: 100%; height:30px; "></div>
                       
                      </div>
                    </div>
                   </div>
               </center>
            </div>
    <div class="spacer"></div>
</div>
@endsection
