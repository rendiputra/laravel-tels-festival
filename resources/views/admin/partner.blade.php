@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="list" class="col col-md-12">
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
				<div class="card" style="padding: 20px">
					<h5>Partner</h5>
					<hr>
						<table id="table" class="table ">
							<thead>
								<tr>
									<th>Tipe</th>
									<th>Nama Partner</th>
									<th>Logo Partner</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
		@foreach($data as $d)
								<tr>
									<td>{{ $d->tipe }}</td>
									<td>{{ $d->nama_partner }}</td>
									<td><img style="height: 100px;" src="{{ url('images/partner/'.$d->logo) }}"></td>
									<td>
										<a class="btn btn-warning" href="{{ route('partner_edit',$d->id_partner) }}">Edit</a>
										<a class="btn btn-danger" href="{{ route('partner_delete',$d->id_partner) }}">Delete</a>
									</td>
								</tr>
		@endforeach					
							</tbody>
						</table>
						<a href="#" id="btn" class="btn btn-primary">Tambah Partner</a>
				</div>
			</div>
			<div id="input" style="display: none;" class="col col-md-10">
				<div class="card" style="padding: 20px;">
					<h5>Tambah Partner</h5>
					<hr>
					<form method="POST" enctype="multipart/form-data" action="{{ route('partner_add') }}">
						@csrf

						<div class="form-group">
							<label>Tipe</label>
							<select name="tipe" class="form-control">
								<option selected disabled>-- Pilih Jenis Partner --</option>
								<option value="media">Media Partner</option>
								<option value="sponsor">Sponsor</option>
							</select>
						</div>
						<div class="form-group">
							<label>Nama Partner</label>
							<input type="text" class="form-control" name="nama_partner">
						</div>
						<div class="form-group">
							<label>Logo Partner</label>
							<input type="file" class="form-control-file" name="img">
						</div>
						<div class="form-group">
							<label>Width Logo</label>
							<input type="number" class="form-control-file" name="wid">
						</div>
						<div class="form-group">
							<button class="btn btn-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
    <script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				document.getElementById('input').style.display = 'block';
				document.getElementById('list').style.display = 'none';
			});
		});
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		});
	</script>
@endsection