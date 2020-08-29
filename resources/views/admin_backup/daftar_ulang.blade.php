@extends('layouts.user')
@section('css')
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
	<section id="daftar_ulang">
		<div class="container">
			<div class="spacer"></div>
			<div class="row justify-content-center">
				<div class="col col-md-8">
					<div class="card" style="padding: 20px;">
						<h5>Daftar Ulang</h5>
						<div class="table-responsive">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Sekolah</th>
										<th>Nama Lomba</th>
										<th>Kode</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
@php $no =1 @endphp
@foreach($data as $d)
	@if($d->valid_player == 1 AND $d->daftar_ulang == 0)
								<tr>
									<td>{{$no++}}</td>
									<td>{{ $d->nama_sekolah }}</td>
									<td>{{ $d->nama_lomba }}</td>
									<td>{{ $d->kode_daftarulang }}</td>
									<td class="text-center">
										<a href="{{ route('daftar_ulang_action',$d->id_daftar) }}" class="btn btn-primary"><i class="fas fa-check"></i></a>
									</td>
								</tr>
	@endif
@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="spacer"></div>
		</div>
	</section>
@endsection
@section('js')
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		});
	</script>
@endsection