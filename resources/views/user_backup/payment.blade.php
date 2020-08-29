@extends('layouts.user')
@section('css')
<style type="text/css">
	.waktu{
		padding:20px ;font-size: 1.6em; background-color: #f0f0f0;
	}
	.btn-curve{
		padding-left:20px;
		padding-right:20px;
		border-radius:10px;
	}
	.pay-card{
		font-family: 'Poppins', sans-serif;
		-webkit-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		-moz-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		margin-top: 50px;
	}
</style>
@endsection
@section('content').
<section class="pembayaran" id="pembayaran" style="background-color: #E7E7E7;">
	<div class="spacer"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-md-6 col-sm-10 col-12" {{-- style="background-color: #fff;" --}}>
				<div class="card pay-card">
				  <div class="card-body text-center">
				    <h5>Keterangan Pembayaran</h5>
					<p>Mohon segera lakukan pembayaran sebelum:</p>
					<div class="waktu">
						<b>{{ date('d F Y H:i:s', strtotime($payment->tgl_kadaluarsa)) }}</b><br>
					</div><br>
					<p>Nominal yang harus dibayarkan:</p>
					<h3>Rp.{{ number_format($payment->biaya_pendaftaran + $payment->kode_unik,2) }}</h3><br>
					<p class="alert alert-danger" style="color:red">Mohon transfer sesuai dengan angka diatas! 3 digit terakhir merupakan kode yang membantu pengkonfirmasian pembayaran!</p>
					<p>Pembayaran dapat dilakukan dengan transfer ke:</p>
					{{-- <h3 class="text-left">BCA</h3> --}}
					<h3 class="text-left"><img src="http://1.bp.blogspot.com/-qJXouKzK-Pk/VhRtc2jL5cI/AAAAAAAAHAc/xEJWs5oPruw/s1600/logo-bca.png" alt="" width="15%" max-width="100%" height="auto" class="img-fluid"></h3>

					<p style="padding:20px ;font-size: 1.6em; background-color: #f0f0f0"><b> 8420834030</b> a.n <b>RIO MAHABELY B</b></p>
				  </div>
				</div>
				<div class="spacer" style="height: 10px"></div>
			{{-- 	<div class="text-center">
					<h5>Keterangan Pembayaran</h5>
					<p>Mohon segera lakukan pembayaran sebelum:</p>
					<div class="waktu">
						<b>{{ date('d F Y H:i:s', strtotime($payment->tgl_kadaluarsa)) }}</b><br>
					</div><br>
					<p>Nominal yang harus dibayarkan:</p>
					<h3>Rp.{{ number_format($payment->biaya_pendaftaran + $payment->kode_unik,2) }}</h3><br>
					<p class="alert alert-danger" style="color:red">Mohon transfer sesuai dengan angka diatas! 3 digit terakhir merupakan kode yang membantu pengkonfirmasian pembayaran!</p>
					<p>Pembayaran dapat dilakukan dengan transfer ke:</p>
					<h3 class="text-left">BCA</h3>
					<p style="padding:20px ;font-size: 1.6em; background-color: #f0f0f0"><b>8420834030</b> a.n <b>RIO MAHABELY B</b></p>
				</div> --}}
			</div>
			<div class="col-xl-6 col-md-6 col-sm-10 col-12">
				{{-- <div class="spacer"></div> --}}
				<div class="card pay-card">
				  <div class="card-body text-center">
				  	<h5>Konfirmasi Pembayaran</h5>
					<p>Sudah Melakukan Pembayaran? Lengkapi form dibawah ini.</p>
					@if(Session::get('sukses'))
					<div class="alert alert-success">
					{{ Session::get('sukses')}}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					@endif
					@if(Session::get('eror'))
					<div class="alert alert-danger">
					{{ Session::get('eror')}}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					@endif
					@if ($errors->any())
					<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
					</ul>
					</div>
					@endif
					<form method="POST" action="{{ route('up_bukti')}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id_daftar" value="{{ $payment->id_daftar }}">
						<div class="form-group">
							<label>Nama Pengirim</label>
							<input type="text" name="pengirim" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Bukti Transfer</label>
							<input type="file" name="img" class="form-control-file" accept="image/*;capture=camera" required>
							{{-- <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
							  </div>
							  <div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile01" name="img" aria-describedby="inputGroupFileAddon01">
							    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							  </div>
							</div> --}}
						</div>
						<button class="btn btn-primary btn-curve"><i class="fas fa-paper-plane"></i> Kirim Bukti</button>
						<a href="{{ url('cup/user/dash')}}" class="btn btn-secondary">Back</a>
					</form>
				  </div>
				</div>

			</div>
		</div>
		<div class="spacer"></div>
	</div>
</section>
	
@endsection
