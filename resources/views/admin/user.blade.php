@extends('layouts.user')
@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs4/dt-1.10.18/b-1.5.6/sc-2.0.0/datatables.min.css"/>
	 
	<script type="text/javascript" src="https://cdn.datatables.net/w/bs4/dt-1.10.18/b-1.5.6/sc-2.0.0/datatables.min.js"></script>
@endsection
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-12">
				<div class="card" style="padding: 20px;">
					<h5>Management User</h5>
					<hr>
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<thead>
								<tr>
									<th class="text-center align-middle">No</th>
									<th class="text-center align-middle">Nama Sekolah</th>
									<th class="text-center align-middle">Email</th>
									<th class="text-center align-middle">Nama Pengangung Jawab</th>
									<th class="text-center align-middle">Contact Person</th>
									<th class="text-center align-middle">Alamat Sekolah</th>
									<th class="text-center align-middle">Aksi</th>
								</tr>
							</thead>
							<tbody style="font-size:0.8em;">
	@php $no= 1; @endphp
	@foreach($data as $d)

		@if($d->nama_sekolah == "ADMIN")
		@else
								<tr>
									<td class="text-center align-middle">{{ $no++ }}</td>
									<td class="text-center align-middle">{{ $d->nama_sekolah }}</td>
									<td class="text-center align-middle">{{ $d->email }}</td>
									<td class="text-center align-middle">{{ $d->name }}</td>

									<td class="text-center align-middle">
										<a href="https://wa.me/62{{ substr($d->contact_person, 1) }}" target="_blank">{{ $d->contact_person }}</a>
									</td>
									<td class="text-center align-middle">{{ $d->alamat_sekolah }}</td>
									<td class="text-center align-middle">
										<a href="{{ route('user_manage_data',$d->id) }}" class="btn btn-primary">Detail</a>
									</td>
								</tr>
		@endif						
	@endforeach					
							</tbody>
						</table>
					</div>
					<div class="form-group">
						<a href="{{ route('user_add') }}" class="btn btn-primary">Tambah User</a>
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