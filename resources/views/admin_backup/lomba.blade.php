@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="list" class="col col-md-12 col-sm-12 col-12">
				<div class="card" style="padding: 20px">
					<h4>Data Lomba</h4><hr>
					<div class="container">
						<div class="table-responsive">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th class="align-middle">No</th>
										<th class="align-middle">Nama Lomba</th>
										<th class="align-middle">Total Pemain</th>
										<th class="align-middle">Biaya Pendaftaran</th>
										<th class="align-middle">CP 1</th>
										<th class="align-middle">CP 2</th>
										<th class="align-middle">Aksi</th>
									</tr>
								</thead>
								<tbody>
@php $no = 1 @endphp
@foreach($data as $d)
									<tr>
										<td class="align-middle">{{$no++}}</td>							
										<td>{{ $d->nama_lomba }}</td>
										<td>{{ $d->total_pemain }}</td>
										<td>{{ $d->biaya_pendaftaran }}</td>
										<td>{{ $d->cp_1 }}</td>
										<td>{{ $d->cp_2 }}</td>
										<td class="text-center">
											<a href="{{ url('/cup/'.str_replace(' ','-',$d->nama_lomba)) }}" class="btn btn-info" style="margin-bottom: 5px">Lihat Lomba</a>
											<a href="{{ route('peserta_lomba',$d->id_bidang_lomba) }}" class="btn btn-primary">Lihat Peserta</a>
										</td>
									</tr>
@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="row">
							<div class="col col-md-4">
								<a href="#" class="btn btn-primary" style="border-radius:5px;width: 100%" id="btn" disabled>Tambah Lomba</a>
							</div>
							<div class="col-md-4">
								<a href="#" class="btn btn-info" style="border-radius:5px;width: 100%">Bagan Perlombaan & Streaming</a>

							</div>
						</div>
					</div>
				</div>
			</div>

		{{-- TAMBAH LOMBA --}}


			<div id="add_lomba" class="col col-md-8 col-sm-10 col-10">
				<div class="card" style="padding: 20px">
					<h4>Tambah Lomba</h4><hr>
					<div class="container">
						<form method="POST" action="{{ route('lomba_tambah') }}" enctype="multipart/form-data">
							<input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<label>Nama Lomba</label>
								<input class="form-control" type="text" name="nama_lomba">
							</div>
							<div class="form-group">
								<label>Juknis</label>
								<textarea class="form-control" name="juknis" id="juknis"></textarea>
							</div>
							<div class="form-group">
								<label>Syarat</label>
								<textarea class="form-control" name="syarat" id="syarat"></textarea>
							</div>
							<div class="form-group">
								<label>Total Pemain</label>
								<input class="form-control" type="number" name="total_pemain">
							</div>
							<div class="form-group">
								<label>Minimal Pemain</label>
								<input type="text" class="form-control" name="min_total_pemain">
							</div>
							<div class="form-group">
								<label>Biaya Pendaftaran</label>
								<input class="form-control" type="number" name="biaya">
							</div>
							<div class="form-group">
								<label>Logo Lomba</label>
								<input class="form-control" type="file" name="img">
							</div>
							<div class="form-group">
								<label>Contact Person</label>
								<input class="form-control" type="text" name="cp_1" placeholder="Contact Person 1"><br>
								<input class="form-control" type="text" name="cp_2" placeholder="Contact Person 2">
							</div>
							<div class="form-group">
								<label>Maximal Persekolah</label>
								<input type="text" class="form-control" name="max">
							</div>
							<button class="btn btn-primary">Tambah</button>
							<a href="{{url('cup/admin/lomba')}}" class="btn btn-secondary">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="spacer"></div>
	</div>
@endsection
@section('js')
		<script type="text/javascript">
					document.getElementById('add_lomba').style.display = 'none';
			$(document).ready(function(){
				$('#btn').click(function(){
					document.getElementById('add_lomba').style.display = 'block';
					document.getElementById('list').style.display = 'none';
				})
			});
		</script>
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	    <script>
	        CKEDITOR.replace( 'juknis' );
	        CKEDITOR.replace( 'syarat' );
	    </script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#table').DataTable();
			});
		</script>
@endsection