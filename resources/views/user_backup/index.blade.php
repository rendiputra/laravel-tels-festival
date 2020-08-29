@extends('layouts.user')
@section('css')
<style type="text/css">
	.btn-curve{
		padding-left:20px;
		padding-right:20px;
		border-radius:10px;
	}
	.dashboard-lomba{
		width: 100%;
		height: auto;
	}
	.daftar-lomba{
		font-family: 'Poppins', sans-serif;
		-webkit-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		-moz-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		margin-top: 50px;
	}
/*	.btn-status:hover{
		background-color: #dc3545;
	}
	.btn-status:active{
		background-color: #dc3545;
	}*/
</style>
@endsection
@section('content')
<section class="dashboard-lomba" style="background-color: #E7E7E7; max-height: 100%; height: 100%;">
		<div class="container">
		<div class="spacer"></div>
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
		<div class="card daftar-lomba">
			<div style="padding: 20px">
				<h3>Daftar lomba yang diikuti</h3>
				<hr>
					<div class="table-responsive">
						<table class="table table-bordered {{-- table-striped --}} table-hover">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Nama Lomba</th>
									<th class="text-center">Status</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
@php $no = 1 @endphp
@foreach($user_data as $data)
@php
$jumlah = 0;
foreach($data2 as $d){
	if($d->id_daftar == $data->id_daftar){
		$jumlah++;
	}
}
$status = "";
foreach ($data3 as $v) {
	if($v->id_daftar == $data->id_daftar){
		$status = "nunggu";
	}
}
@endphp
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $data->nama_lomba }}</td>
									<td class="text-center">
	@if($data->pembayaran == TRUE)
		@if($jumlah >= $data->min_total_pemain && $jumlah <= $data->total_pemain)
			@if($data->valid_player == FALSE)
										<div class="btn btn-warning btn-curve btn-status" style="cursor: default;" >Validasi Peserta</div>
			@else
				@if($data->daftar_ulang == FALSE)
										<div class="btn btn-info btn-curve btn-status" style="cursor: default;" >Menunggu Daftar Ulang</div>				
				@else
										<div class="btn btn-success btn-curve btn-status" style="cursor: default;" >Berhasil Daftar Ulang</div>				
				@endif
			@endif
		@else
										<div class="btn btn-outline-warning btn-curve btn-status" style="cursor: default;" >Lengkapi Data Peserta</div>

		@endif

	@else
		@if($status == "nunggu")
										<div class="btn btn-info btn-curve btn-status" style="cursor: default;" >Menuggu Validasi Pembayaran</div>
		
		@else
										<div class="btn btn-danger btn-curve btn-status" style="cursor: default;" >Segera Lakukan Pembayaran</div>
		
		@endif
	@endif
										</td>
<!-- AKSI -->
									<td class="text-center">
	@if($data->pembayaran == TRUE)

										<a href="{{ route('manage_peserta',$data->id_daftar) }}" class="btn btn-primary"><i class="fas fa-tasks"></i> Manage Peserta</a>
										<a href="{{ route('lomba',str_replace(' ','-',$data->nama_lomba)) }}" class="btn btn-secondary"><i class="fas fa-info-circle"></i> Informasi Lomba</a>
		@if($jumlah >= $data->min_total_pemain && $jumlah <= $data->total_pemain)
			@if($data->valid_player == FALSE)
										<a href="{{ route('valid_peserta',$data->id_daftar) }}" class="btn btn-info btn-curve"><i class="fas fa-check"></i> Validasi Peserta</a>
			@else
				@if($data->daftar_ulang == FALSE)

										<a href="{{ route('reregis',$data->id_daftar) }}" class="btn btn-info btn-curve"><i class="fas fa-print"></i> Daftar Ulang</a>
				@endif
			@endif
		@endif

	@else
		@if($status == "nunggu")
		@else
										<a href="{{ url('/cup/pembayaran/'.$data->id_daftar) }}" class="btn btn-danger"><i class="fas fa-money-bill-wave"></i> Bayar</a>
		@endif
	@endif
									</td>
								</tr>
@endforeach
							</tbody>
						</table>
					</div>
			</div>
		</div>
	</div>
	{{-- <div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div> --}}
</section>
@endsection