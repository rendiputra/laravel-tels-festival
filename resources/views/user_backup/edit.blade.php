@extends('layouts.user')
@section('content')
	<section>
		<div class="container">
			<div class="spacer"></div>
			<div class="row justify-content-center">
				<div class="col col-md-6">
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
						<h5>Edit Data Peserta</h5>
						<form method="POST" action="{{ route('edit_peserta_action') }}" enctype="multipart/form-data">
							@csrf

							<input type="hidden" name="id_data_daftar" value="{{ $d->id_data_daftar }}">
							<input type="hidden" name="lomba" value="{{ $d->nama_lomba }}">
							<div class="form-group">
								<label>Foto Pas 3x4</label>
								<input class="form-control" type="file" name="img" accept="image/*;capture=camera">
							</div>
							<div class="form-group">
								<label>Foto saat ini :</label>
								<div class="form-control text-center" style="height: auto">
									<img src="{{ asset('images/pas_foto/'.$d->img) }}" style="height: 100px;">
								</div>
							</div>
							<div class="form-group">
								<label>Foto Kartu Pelajar</label>
								<input class="form-control" type="file" name="img_kartupelajar" accept="image/*;capture=camera">
							</div>
							<div class="form-group">
								<label>Foto saat ini :</label>
								<div class="form-control text-center" style="height: auto">
									<img src="{{ asset('images/pas_foto/'.$d->img_kartupelajar) }}" style="height: 100px;">
								</div>
							</div>

							<div class="form-group">
								<label>NISN</label>
								<input class="form-control" type="number" name="nisn" value="{{ $d->nisn }}">
							</div>

							<div class="form-group">
								<label>Nama Peserta</label>
								<input class="form-control" type="text" name="nama" value="{{ $d->nama }}">
							</div>

							<div class="form-group">
								<label>Contact Person</label>
								<input class="form-control" type="text" name="cp" value="{{ $d->contact_person }}">
							</div>
	@php
		$tgl = explode('-',$d->tgl_lahir)
	@endphp
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<div class="row justify-content-center">
									<div class="col-md-3">
										<select class="form-control" name="tgl" required>
											<option selected disabled>Tanggal</option>
						@for($i=1;$i<32;$i++)
											<option @if($tgl[2] == $i) selected @endif >{{$i}}</option>
						@endfor
										</select>
									</div>
									<div class="col-md-6">
										<select class="form-control" name="bln" required>
											<option selected disabled>Bulan</option>
						@for($i=1;$i<13;$i++)
											<option @if($tgl[1] == $i) selected @endif value="{{$i}}">{{$bulan[$i]}}</option>
						@endfor
										</select>
									</div>
									<div class="col-md-3">
										<select class="form-control" name="thn" required>
											<option selected disabled>Tahun</option>
						@for($i=1999;$i<2016;$i++)
											<option @if($tgl[0] == $i) selected @endif >{{$i}}</option>
						@endfor
										</select>
									</div>
								</div>
							</div>
		@if($d->nama_lomba == "Free Fire" or $d->nama_lomba == "Auto Chesh" or $d->nama_lomba == "Mobile Legend")
							<div class="form-group">
								<label>IDGame</label>
								<input type="number" name="idgame" class="form-control" value="{{ $d->idgame }}">
							</div>
							<div class="form-group">
								<label>Nickname</label>
								<input type="text" name="nickname" class="form-control" value="{{ $d->nickname }}">
							</div>
		@elseif($d->nama_lomba == "Short Movie")
							<div class="form-group">
								<label>Jobdeks</label>
								<input type="text" name="jobdeks" class="form-control" value="{{ $d->job_deks }}">
							</div>
		@elseif($d->nama_lomba == "Futsal SMP" or $d->nama_lomba == "Futsal SMA")
							<div class="form-group">
								<label>Nomor Punggung</label>
								<input type="text" name="no_punggung" class="form-control" value="{{ $d->no_punggung }}">
							</div>
		@endif
						<button href="#" class="btn btn-primary">Update</button>
						<a href="{{ url('/cup/user/dash')}}" class="btn btn-secondary">Kembali</a>
						</form>
					</div>

				</div>
			</div>
		</div>
	</section>
@endsection