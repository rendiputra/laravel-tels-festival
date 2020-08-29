@extends('layouts.user')
@section('css')
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-10 col-sm-10 col-12">
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
				<div class="card" style="padding: 20px;">
					<h5>Konfirmasi Pembayaran</h5><br>
					<table id="table" class="table table-bordered">
						<thead>
							<tr>
								<th>Nama Sekolah</th>
								<th>Nama Lomba</th>
								<th>Nominal</th>
								<th>Bukti</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
@foreach($prioritas as $p)
							<tr>
								<td>{{$p->nama_sekolah}}</td>
								<td>{{$p->nama_lomba}}</td>
								<td>Rp.{{ number_format($p->biaya_pendaftaran + $p->kode_unik,2)}}</td>
								<td><a href="{{ url('images/butki/'.$p->bukti)}}">Lihat</a></td>
								<td>
									<a href="{{ route('confirm_action',[$p->id_payment,$p->id_daftar,'valid']) }}" class="btn btn-primary">Valid</a>
								</td>
							</tr>
@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
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