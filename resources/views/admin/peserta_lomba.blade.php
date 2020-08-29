@extends('layouts.user')
@section('css')
	<style type="text/css">
		.same{
			height: 100%;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs4/dt-1.10.18/b-1.5.6/sc-2.0.0/datatables.min.css"/>
	 
	<script type="text/javascript" src="https://cdn.datatables.net/w/bs4/dt-1.10.18/b-1.5.6/sc-2.0.0/datatables.min.js"></script>
@endsection
@section('content')

@php
	$pendaftar = 0;
	$pembayar = 0;
	$valid_player = 0;
	$daftar_ulang = 0;

	foreach($pendaftaran as $d){
		$pendaftar++;
		if($d->pembayaran == TRUE){
			$pembayar++;
		}
		if($d->valid_player == TRUE){
			$valid_player++;
		}
		if($d->daftar_ulang == TRUE){
			$daftar_ulang++;
		}
	}
@endphp
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center" style="">
			<div class="col col-md-12 col-sm-12 col-12">
				<div class="card" style="padding: 25px">
					<h3>Data Peserta Lomba <b>{{ $lomba->nama_lomba }}</b></h3>
					<hr>
					<div class="row justify-content-center" style="max-height: 200px">
						<div class="col col-md-3 col-sm-6 col-12">
							<div class="card text-center same" style="padding: 20px">
								<h6>Terdaftar</h6>
								<hr>
									{{ $pendaftar }}
							</div>
						</div>
						<div class="col col-md-3 col-sm-6 col-12">
							<div class="card text-center same" style="padding: 20px">
								<h6>Telah Membayar</h6>
								<hr>
									{{ $pembayar }}
							</div>
						</div>
						<div class="col col-md-3 col-sm-6 col-12">
							<div class="card text-center same" style="padding: 20px">
								<h6>Peserta Valid</h6>
								<hr>
									{{ $valid_player }}
							</div>
						</div>
						<div class="col col-md-3 col-sm-6 col-12">
							<div class="card text-center same" style="padding: 20px">
								<h6>Telah Daftar Ulang</h6>
								<hr>
									{{ $daftar_ulang }}
							</div>
						</div>
					</div><br>
					<h4>Daftar Sekolah yang mengikuti lomba</h4>
					<hr>
					<div class="table-responsive">
						<table id="table" class="table table-bordered">
							<thead>
								<tr>
									<th class="align-middle text-center">Kode Unik</th>
									<th class="align-middle text-center">Nama Sekolah</th>
									<th class="align-middle text-center">Nama Penaggung Jawab</th>
									<th class="align-middle text-center">No Penaggung Jawab</th>
									<th class="align-middle text-center">Nama Peserta</th>
									<th class="align-middle text-center">Status</th>
									<th class="align-middle text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
	@foreach($pendaftaran as $d)
	@php
		if($d->pembayaran == false){
			$status = "Belum Bayar!";
		}else{
			if($d->valid_player == false){
				$status = "Menunggu Validasi!";
			}else{
				if($d->daftar_ulang == false){
					$status = "Mengunggu Daftar Ulang";
				}else{
					$status = "Telah Melakukan Daftar Ulang";
				}
			}
		}
	@endphp
								<tr>
									<td class="align-middle text-center">{{ $d->kode_unik}}</td>
									<td class="align-middle text-center"><a href="{{ route('user_manage_data',$d->id_user) }}">{{ $d->nama_sekolah }}</a></td>
									<td class="align-middle text-center">{{ $d->name }}</td>
									<td class="align-middle text-center">
										<a href="https://wa.me/62{{ substr($d->contact_person, 1) }}" target="_blank">{{ $d->contact_person }}</a>
									<td class="align-middle text-center">
			@foreach($peserta as $p)
				@if($p->id_daftar == $d->id_daftar)
										{{ $p->nama }}<br>
				@endif
			@endforeach
									</td>
									<td class="align-middle text-center">{{ $status }}</td>
									<td class="align-middle text-center">
										<a class="btn btn-primary" href="{{ route('user_lomba_manage',[$d->id_user,$d->id_daftar]) }}" style="margin-bottom: 5px;">More</a>
		@if($status == "Mengunggu Daftar Ulang" or $status == "Telah Melakukan Daftar Ulang")
										<a class="btn btn-info" href="{{ route('id_card',$d->id_daftar) }}">Cetak Nametag</a>
		@endif	
									</td>
								</tr>
	@endforeach
							</tbody>
						</table>
					</div><br>
					<div class="form-group">
						<a class="btn btn-primary" style="width: 20%" href="{{ url('/cup/admin/lomba') }}">Kembali</a>
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