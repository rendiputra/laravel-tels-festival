@extends('layouts.user')
@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs4/dt-1.10.18/b-1.5.6/sc-2.0.0/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/w/bs4/dt-1.10.18/b-1.5.6/sc-2.0.0/datatables.min.js"></script>
	<style type="text/css">
		.table .btn{
			border-radius: 0;
		}
	</style>
@endsection
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
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
			<div class="col col-md-12">
				<div class="card" style="padding: 20px;">
					<h5>Management User</h5>
					<hr>
					<div class="container mb-5">
						<div class="card">
							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<td>Nama Sekolah / Team</td>
										<td>{{ $user->nama_sekolah }}</td>
									</tr>
									<tr>
										<td>Alamat Sekolah</td>
										<td>{{ $user->alamat_sekolah }}</td>
									</tr>
									<tr>
										<td>Nama Penanggung Jawab</td>
										<td>{{ $user->name }}</td>
									</tr>
									<tr>
										<td>No Penanggung Jawab</td>
										<td>
										<a href="https://wa.me/62{{ substr($user->contact_person, 1) }}" target="_blank">{{ $user->contact_person }}</a>
										</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>
											<a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<thead>
								<tr>
									<th class="text-center align-middle">No</th>
									<th class="text-center align-middle">Nama Lomba</th>
									<th class="text-center align-middle">Status Lomba</th>
									<th class="text-center align-middle">Aksi</th>
								</tr>
							</thead>
							<tbody style="font-size:0.8em;">
@php $no = 1; @endphp
@foreach($lomba as $l)
@php
$jumlah = 0;
foreach($data_peserta as $d){
	if($d->id_daftar == $l->id_daftar){
		$jumlah++;
	}
}
$status = "";
foreach ($payment as $v) {
	if($v->id_daftar == $l->id_daftar){
		$status = "nunggu";
	}
}
@endphp
								<tr>
									<td class="text-center align-middle">{{$no++}}</td>
									<td class="text-center align-middle">{{ $l->nama_lomba }}</td>
									<td class="text-center align-middle">
	@if($l->pembayaran == TRUE)
		@if($jumlah >= $l->min_total_pemain && $jumlah <= $l->total_pemain)
			@if($l->valid_player == FALSE)
										<div class="btn btn-warning btn-curve btn-status disabled" style="cursor: default;" >Validasi Peserta</div>
			@else
				@if($l->daftar_ulang == FALSE)
										<div class="btn btn-info btn-curve btn-status disabled" style="cursor: default;" >Menunggu Daftar Ulang</div>				
				@else
										<div class="btn btn-success btn-curve btn-status disabled" style="cursor: default;" >Berhasil Daftar Ulang</div>				
				@endif
			@endif
		@else
										<div class="btn btn-outline-warning btn-curve btn-status disabled" style="cursor: default;" >Lengkapi Data Peserta</div>

		@endif

	@else
		@if($status == "nunggu")
										<div class="btn btn-info btn-curve btn-status" style="cursor: default;" >Menuggu Validasi Pembayaran</div>
		
		@else
										<div class="btn btn-danger btn-curve btn-status" style="cursor: default;" >Segera Lakukan Pembayaran</div>
		
		@endif
	@endif
									</td>
									<td class="text-center align-middle">
										<a href="{{ route('user_lomba_manage',[$user->id,$l->id_daftar])}}" class="btn btn-info">Lihat Peserta</a>
									</td>
								</tr>
@endforeach
							</tbody>
						</table>
					</div>
					<div class="form-group mt-3">
						<a href="{{ route('user_delete',$user->id) }}" class="btn btn-danger">Hapus User</a>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
@endsection
@section('js')
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#table').DataTable();
			});
		</script>
@endsection