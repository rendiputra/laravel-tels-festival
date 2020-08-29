@extends('layouts.user')
@section('css')
    <style type="text/css">
        .item_user{
            width: 100%;
            height: auto;
            padding: 10px;
        }
        
      .dashboard-admin{
		width: 100%;
		height: auto;
	}
	.card{
		font-family: 'Poppins', sans-serif;
		-webkit-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		-moz-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		margin-top: 50px;
	}
    </style>
@endsection
@section('content')
<section class="dashboard-admin" id="dashboard-admin" height="100%" style="background-color: #E7E7E7;">
    <div class="container">
        <div class="spacer" style="height: 150px"></div>
        <div class="row justify-content-center">
            <div class="col col-md-10 col-sm-10 col-12">
                <div class="card" style="padding: 20px;">
                    <h4>Dashboard</h4>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>User</h5>
                                <hr>
                                <span style="font-size: 2em">{{ count($user) }}</span>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>Lomba</h5>
                                <hr>
                                <span style="font-size: 2em">{{ count($lomba) }}</span>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>Pendaftar</h5>
                                <hr>
                                <span style="font-size: 2em">{{ count($pendaftaran) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="spacer" style="height: 150px;"></div>
    </div>
</section>
@endsection