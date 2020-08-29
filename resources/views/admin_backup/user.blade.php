@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-12">
				<div class="card" style="padding: 20px;">
					<h5>Management User</h5>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Sekolah</th>
									<th>Email</th>
									<th>Nama Pengangung Jawab</th>
									<th>Contact Person</th>
									<th>Alamat Sekolah</th>
									<th>Lomba Yang Diikuti</th>
								</tr>
							</thead>
							<tbody style="font-size:0.8em;">
	@php $no= 1; @endphp
	@foreach($data as $d)

		@if($d->nama_sekolah == "ADMIN")
		@else
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $d->nama_sekolah }}</td>
									<td>{{ $d->email }}</td>
									<td>{{ $d->name }}</td>

									<td>
										<a href="https://wa.me/62{{ substr($d->contact_person, 1) }}" target="_blank">{{ $d->contact_person }}</a>
									</td>
									<td>{{ $d->alamat_sekolah }}</td>
									<td>
			@foreach($lomba as $l)
				@if($l->id_user == $d->id)
											-<a href="{{ route('user_lomba_manage',[$d->id,$l->id_daftar]) }}">{{ $l->nama_lomba }}</a><br>
				@endif
			@endforeach
		@endif									
									</td>
								</tr>
	@endforeach					
							</tbody>
						</table>
					</div>
					<div class="form-group">
						<a href="#" class="btn btn-primary">Tambah User</a>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
@endsection