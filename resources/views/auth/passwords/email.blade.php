@extends('layouts.form')
@section('css')
<style type="text/css">
            html,
            body{
                font-family: 'Quicksand', sans-serif;
                height: 800px;
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
    <div class="spacer"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
</div>
@endsection
