@extends('layouts.user')
@section('css')
	<style type="text/css">
		.table-res{
			max-width: 100%;
			overflow: scroll;
			overflow-y: hidden;
		}
		.manage-perserta{
			width: 100%;
			height: auto;
			/*max-height: 100%;*/
		}
		#input{
			display: none;
		}

		.daftar-perserta{
			font-family: 'Poppins', sans-serif;
			-webkit-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
			-moz-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
			box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
			margin-top: 40px;
		}
	</style>
@endsection
@section('content')
<section class="manage-perserta" id="manage" style="background-color: #E7E7E7;">
	<div class="spacer"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col col-md-12 col-sm-12 col-12">
				<div class="daftar-perserta alert alert-danger" style="padding: 30px;">
					<h4><b>PERHATIAN !!!</b></h4>
					<hr>
					<ul style="margin-bottom: 0">
@if($data_lomba->min_total_pemain == $data_lomba->total_pemain)
						<li>Peserta harus berjumlah <b>{{ $data_lomba->total_pemain }}</b>!</li>
@else
						<li>Minimal peserta adalah <b>{{ $data_lomba->min_total_pemain }} Orang</b>!</li>
						<li>Maksimal peserta adalah <b>{{ $data_lomba->total_pemain }} Orang</b>!</li>
@endif
					</ul>
					<div style="position: absolute; right: 20px; top: 50%;">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
			<div id="list" class="col col-md-12 col-sm-12 col-12">
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
@if($data_lomba->nama_lomba == "Short Movie" or $data_lomba->nama_lomba == "Futsal SMP" or $data_lomba->nama_lomba == "Futsal SMP")

				<div class="card daftar-perserta" style="padding: 20px; margin-bottom: 10px;">
					<h4>Data Lomba</h4>
					<hr>
					<form method="POST" action="{{ route('edit_data_lomba') }}">
						@csrf

						<input type="hidden" name="id_daftar"value="{{ $data_lomba->id_daftar }}">
						<input type="hidden" name="nama_lomba" value="{{ $data_lomba->nama_lomba }}">

	@if($data_lomba->nama_lomba == "Short Movie")
						<div class="form-group">
							<label>SINOPSIS</label>
							<textarea name="sinopsis" class="form-control">@if($data_lomba->sinobsis != NULL) {{ $data_lomba->sinobsis }} @endif</textarea>
						</div>
	@endif
	@if($data_lomba->nama_lomba == "Futsal SMP" or $data_lomba->nama_lomba == "Futsal SMA")
						<div class="form-group">
							<label>Nama Team</label>
							<input type="text" class="form-control" name="nama_team" @if($data_lomba->nama_team != NULL) value="{{$data_lomba->nama_team }}" @endif>
						</div>
						<div class="form-group">
							<label>Nama Pelatih</label>
							<input type="text" class="form-control" name="nama_pelatih" @if($data_lomba->nama_pelatih != NULL) value="{{$data_lomba->nama_pelatih }}" @endif>
						</div>
						<div class="form-group">
							<label>No Pelatih</label>
							<input type="number" class="form-control" name="no_pelatih" @if($data_lomba->no_pelatih != NULL) value="{{$data_lomba->no_pelatih }}" @endif>
						</div>
	@endif
						<div class="form-group">
							<button class="btn btn-primary">Simpan</button>
						</div>
					</form>	
				</div>
@endif
				<div class="card daftar-perserta" style="padding: 20px;">
					<h4>Daftar Peserta</h4>
					<hr>
					<div class="table-res">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>No</td>
									<td>NISN</td>
									<td>Nama</td>
									<td>Tanggal Lahir</td>
									<td>Nomor Telfon</td>
									<td>Foto Peserta</td>
									<td>Foto Kartu Pelajar</td>
	@if($data_lomba->nama_lomba == "Free Fire" or $data_lomba->nama_lomba == "Auto Chesh" or $data_lomba->nama_lomba == "Mobile Legend")
									<td>IDGame</td>
									<td>Nickname</td>
	@elseif($data_lomba->nama_lomba == "Short Movie")
									<td>Jobdesk / Peran</td>
	@elseif($data_lomba->nama_lomba == "Futsal SMP" or $data_lomba->nama_lomba == "Futsal SMA")
									<td>Nomor Punggung</td>
	@endif
	@if($data_lomba->valid_player == 0)
									<td>Aksi</td>
	@endif
								</tr>
							</thead>
	@php $no = 1; @endphp
							<tbody>
	@foreach($manage as $m)

								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $m->nisn}}</td>
									<td>{{ $m->nama}}</td>
									<td>{{ date('d F Y',strtotime($m->tgl_lahir))}}</td>
									<td>{{ $m->contact_person}}</td>
									<td class="text-center"><img src="{{ url('images/pas_foto/'.$m->img) }}" style="height: 100px"></td>
									<td class="text-center"><img src="{{ url('images/pas_foto/'.$m->img_kartupelajar) }}" style="height: 100px"></td>
	@if($data_lomba->nama_lomba == "Free Fire" or $data_lomba->nama_lomba == "Auto Chesh" or $data_lomba->nama_lomba == "Mobile Legend")
									<td>{{ $m->idgame}}</td>
									<td>{{ $m->nickname}}</td>
	@elseif($data_lomba->nama_lomba == "Short Movie")
									<td>{{ $m->job_desk}}</td>
	@elseif($data_lomba->nama_lomba == "Futsal SMP" or $data_lomba->nama_lomba == "Futsal SMA")
									<td>{{ $m->no_punggung}}</td>
	@endif
		@if($data_lomba->valid_player == 0)

									<td>
										<a href="{{ route('edit_peserta',$m->id_data_daftar) }}" class="btn btn-outline-warning">Edit</a>
										<a href="{{ route('delete_peserta',$m->id_data_daftar) }}" class="btn btn-outline-danger">Delete</a>
									</td>	
		@endif
								</tr>
	@endforeach
@if($data_lomba->valid_player == 0)

	@for($i = count($manage)+1; $i <= $data_lomba->total_pemain; $i++)
								<tr>
									<td>{{ $i }}</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
		@if($data_lomba->nama_lomba == "Free Fire" or $data_lomba->nama_lomba == "Auto Chesh" or $data_lomba->nama_lomba == "Mobile Legend")
									<td>-</td>
									<td>-</td>
		@elseif($data_lomba->nama_lomba == "Short Movie")
									<td>-</td>
		@elseif($data_lomba->nama_lomba == "Futsal SMP" or $data_lomba->nama_lomba == "Futsal SMA")
									<td>-</td>
		@endif	
									<td >-</td>
									<td><a id="btn_input" href="#" class="btn btn-primary">Input Data</a></td>
								</tr>
	@endfor
@endif
							</tbody>
						</table>
					</div><br>
						<a href="{{ url('cup/user/dash')}}" class="btn btn-primary">Back</a>
				</div>
			</div>
			<div id="input" class="col col-md-8 col-sm-10 col-11">
				<div class="card" style="padding: 20px;">
					<h4>Input Data Peserta</h4>
					<hr>
					<form method="POST" id="form" action="{{ route('add_peserta') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id_daftar" value="{{ $data_lomba->id_daftar}}">
						<input type="hidden" name="lomba" value="{{ $data_lomba->nama_lomba}}">
						<div class="form-group">
							<label>Pass Foto Peserta</label><br>
							<input type="file" name="img" required accept="image/*;capture=camera">
							<div class="alert-danger" style="margin-top: 10px; padding: 20px;">Foto SMP berbackground Biru, SMA berbackground Merah</div>
						</div>
						<div class="form-group">
							<label>Foto Kartu Pelajar</label><br>
							<input type="file" name="img_kartupelajar" required accept="image/*;capture=camera">
							<div class="alert-danger" style="margin-top: 10px; padding: 20px;">Foto harus jelas & terbaca!</div>
						</div>
						<div class="form-group">
							<label>NISN Peserta</label>
							<input class="form-control" type="number" name="nisn" required>
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
										<option value="{{$i}}">{{ $bulan[$i] }}</option>
					@endfor
									</select>
								</div>
								<div class="col-md-3">
									<select class="form-control" name="thn" required>
										<option selected disabled>Tahun</option>
					@for($i=1999;$i<2016;$i++)
										<option>{{$i}}</option>
					@endfor
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>No. Telp</label>
							<input class="form-control" type="number" name="cp" required>
						</div>
		@if($data_lomba->nama_lomba == "Free Fire" or $data_lomba->nama_lomba == "Auto Chesh" or $data_lomba->nama_lomba == "Mobile Legend")
						<div class="form-group">
							<label>ID Game</label>
							<input class="form-control" type="number" name="idgame" required>
						</div>
						<div class="form-group">
							<label>Nickname</label>
							<input class="form-control" type="text" name="nickname" required>
						</div>
		@elseif($data_lomba->nama_lomba == "Short Movie")
						<div class="form-group">
							<label>Job Deks</label>
							<input class="form-control" type="text" name="jobdeks" required>
						</div>
		@elseif($data_lomba->nama_lomba == "Futsal" or $data_lomba->nama_lomba == "Futsal SMP" or $data_lomba->nama_lomba == "Futsal SMA")
						<div class="form-group">
							<label>Nomor Punggung</label>
							<input class="form-control" type="number" name="no_punggung" required>
						</div>
		@endif
						<div class="form-group">
							<button class="btn btn-primary btn-block" id="btn">Simpan</button>
						</div>
					</form>
				</div>
			</div>
			<div class="spacer"></div>
		</div>
	</div>
</section>
@endsection
@section('js')

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn_input').click(function(){
				document.getElementById('input').style.display = 'block';
				document.getElementById('list').style.display = 'none';
			});

		$('#form').on('submit',function(){
			$('#btn').attr('disabled','true');
		});

		});

	</script>
	<script type="text/javascript">
		
	</script>
@endsection