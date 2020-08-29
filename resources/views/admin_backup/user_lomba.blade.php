@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="list" class="col col-md-12">
				<div class="card" style="padding: 50px;">
					<h3>Data</h3>
					<div class="form-group">
						<label>Nama Sekolah</label>
						<div class="form-control">{{ $data->nama_sekolah }}</div>
					</div>
					<div class="form-group">
						<label>Penanggung Jawab</label>
						<div class="form-control">{{ $data->name }}</div>
					</div>
					<div class="form-group">
						<label>Nama Lomba</label>
						<div class="form-control">{{ $data->nama_lomba }}</div>
					</div>
					<div class="form-group">
						<label>Jumlah Peserta</label>
						<div class="form-control">
	@if(count($data2) == $data->total_pemain)
							<b style="color:blue">TERPENUHI</b>
	@else
							<b>{{count($data2) .'/'.$data->total_pemain}}</b>
	@endif
						</div>
					</div>
					<div class="form-group">
	@if(count($data2) == $data->total_pemain)
							<a href="{{ route('id_card',$data->id_daftar) }}">Print Name Tag</a>
	@endif		
					</div>
					<h5>Data Peserta</h5>
					<table class="table table-bordered">
						<thead>
							<tr>
									<td>No</td>
									<td>NISN</td>
									<td>Nama</td>
									<td>Tanggal Lahir</td>
									<td>Nomor Telfon</td>
	@if($data->nama_lomba == "Free Fire" or $data->nama_lomba == "Auto Chesh" or $data->nama_lomba == "Mobile Legend")
									<td>IDGame</td>
									<td>Nickname</td>
	@elseif($data->nama_lomba == "Short Movie")
									<td>Job Deks</td>
	@elseif($data->nama_lomba == "Futsal SMP" or $data->nama_lomba == "Futsal SMA")
									<td>Nomor Punggung</td>
	@endif	
									<td>Aksi</td>
							</tr>
						</thead>
						<tbody>
	@php $no = 1 @endphp
	@foreach($data2 as $d)

								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $d->nisn}}</td>
									<td>{{ $d->nama}}</td>
									<td>{{ $d->tgl_lahir}}</td>
									<td>{{ $d->contact_person}}</td>
	@if($data->nama_lomba == "Free Fire" or $data->nama_lomba == "Auto Chesh" or $data->nama_lomba == "Mobile Legend")
									<td>{{ $d->idgame}}</td>
									<td>{{ $d->nickname}}</td>
	@elseif($data->nama_lomba == "Short Movie")
									<td>{{ $d->job_deks}}</td>
	@elseif($data->nama_lomba == "Futsal SMP" or $data->nama_lomba == "Futsal SMA")
									<td>{{ $d->no_punggung}}</td>
	@endif
									<td>
										<a href="{{ route('delete_peserta',$d->id_data_daftar) }}" class="btn btn-outline-danger">Delete</a>
									</td>
								</tr>
	@endforeach
	@for($i = count($data2)+1; $i <= $data->total_pemain; $i++)
								<tr>
									<td>{{ $i }}</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
		@if($data->nama_lomba == "Free Fire" or $data->nama_lomba == "Auto Chesh" or $data->nama_lomba == "Mobile Legend")
									<td>-</td>
									<td>-</td>
		@elseif($data->nama_lomba == "Short Movie")
									<td>-</td>
		@elseif($data->nama_lomba == "Futsal SMP" or $data->nama_lomba == "Futsal SMA")
									<td>-</td>
		@endif	
									<td>-</td>
									<td><a id="btn_input" href="#" class="btn btn-primary">Input Data</a></td>
								</tr>
	@endfor
						</tbody>
					</table>
				</div>
			</div>
			<div id="input" style="display: none;" class="col col-md-8 col-sm-10 col-11">
				<div class="card" style="padding: 20px;">
					<h4>Input Data Peserta</h4>
					<hr>
					<form method="POST" action="{{ route('add_peserta') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id_daftar" value="{{ $data->id_daftar}}">
						<input type="hidden" name="lomba" value="{{ $data->nama_lomba}}">
						<div class="form-group">
							<label>Pass Foto Peserta</label><br>
							<input type="file" name="img" required>
							<div class="alert-danger" style="margin-top: 10px; padding: 20px;">Foto SMP berbackground Biru, SMA berbackground Merah</div>
						</div>
						<div class="form-group">
							<label>NISN Peserta</label>
							<input class="form-control" type="text" name="nisn" required>
						</div>
						<div class="form-group">
							<label>Nama Peserta</label>
							<input class="form-control" type="text" name="nama_peserta" required>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<div class="row justify-content-center">
								<div class="col-md-3">
									<select class="form-control" name="tgl" required>
										<option selected disabled>Tanggal</option>
					@for($i=1;$i<32;$i++)
										<option>{{$i}}</option>
					@endfor
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-control" name="bln" required>
										<option selected disabled>Bulan</option>
					@for($i=1;$i<13;$i++)
										<option>{{$i}}</option>
					@endfor
									</select>
								</div>
								<div class="col-md-3">
									<input class="form-control" type="number" name="thn" placeholder="Tahun" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Contact Person</label>
							<input class="form-control" type="number" name="cp" required>
						</div>
		@if($data->nama_lomba == "Free Fire" or $data->nama_lomba == "Auto Chesh" or $data->nama_lomba == "Mobile Legend")
						<div class="form-group">
							<label>ID Game</label>
							<input class="form-control" type="number" name="idgame" required>
						</div>
						<div class="form-group">
							<label>Nickname</label>
							<input class="form-control" type="text" name="nickname" required>
						</div>
		@elseif($data->nama_lomba == "Short Movie")
						<div class="form-group">
							<label>Job Deks</label>
							<input class="form-control" type="text" name="jobdeks" required>
						</div>
		@elseif($data->nama_lomba == "Futsal" or $data->nama_lomba == "Futsal SMP" or $data->nama_lomba == "Futsal SMA")
						<div class="form-group">
							<label>Nomor Punggung</label>
							<input class="form-control" type="number" name="no_punggung" required>
						</div>
		@endif
						<div class="form-group">
							<button class="btn btn-primary btn-block">Simpan</button>
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
			$('#btn_input').click(function(){
				document.getElementById('input').style.display = 'block';
				document.getElementById('list').style.display = 'none';
			});
		});
	</script>
@endsection