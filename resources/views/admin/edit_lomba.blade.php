@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-8 col-sm-10 col-12">
				<div class="card" style="padding: 20px;">
					<h5>Edit Data!</h5>
					<form method="POST" action="{{ route('act_edit_lomba') }}">
						@csrf

						<input type="hidden" name="id_bidang_lomba" value="{{ $data->id_bidang_lomba }}">

						<div class="form-group">
							<label>Nama Lomba</label>
							<input type="text" name="nama_lomba" class="form-control" value="{{ $data->nama_lomba }}">
						</div>

						<div class="form-group">
							<label>Waktu tm</label>
							<textarea name="tm" class="form-control" id="tm">
								{{ $data->tm }}
							</textarea>
						</div>

						<div class="form-group">
							<label>Waktu Lomba</label>
							<textarea name="lomba" class="form-control" id="lomba">
								{{ $data->lomba }}
							</textarea>
						</div>

						<div class="form-group">
							<label>Waktu Pendaftaran</label>
							<textarea name="pendaftaran" class="form-control" id="pendaftaran">
								{{ $data->pendaftaran }}
							</textarea>
						</div>

						<div class="form-group">
							<label>Syarat</label>
							<textarea name="syarat" class="form-control" id="syarat">
								{{ $data->syarat }}
								
							</textarea>
						</div>

						<div class="form-group">
							<label>Minimal Pemain</label>
							<input type="number" class="form-control" name="min_total_pemain" value="{{ $data->min_total_pemain }}">
						</div>

						<div class="form-group">
							<label>Maksimal Pemain</label>
							<input type="number" class="form-control" name="total_pemain" value="{{ $data->total_pemain }}">
						</div>

						<div class="form-group">
							<label>Biaya Pendaftaran</label>
							<input type="number" class="form-control" name="biaya_pendaftaran"  value="{{ $data->biaya_pendaftaran }}">
						</div>

						<div class="form-group">
							<label>Contact Person 1</label>
							<input type="text" class="form-control" name="cp_1"  value="{{ $data->cp_1 }}">
						</div>

						<div class="form-group">
							<label>Contact Person 2</label>
							<input type="text" class="form-control" name="cp_2"  value="{{ $data->cp_2 }}">
						</div>

						<div class="form-group">
							<button class="btn btn-primary">Update</button>
							<a href="{{ url('/cup/admin/lomba') }}" class="btn btn-secondary">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
@endsection
@section('js')
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	    <script>
	        CKEDITOR.replace( 'tm' );
	        CKEDITOR.replace( 'lomba' );
	        CKEDITOR.replace( 'pendaftaran' );
	        CKEDITOR.replace( 'syarat' );
	    </script>
@endsection