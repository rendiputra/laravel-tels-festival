@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-8 col-sm-10 col-12">
				<div class="card" style="padding: 20px;">
					<h5>Edit Lomba!</h5>
					<form method="POST" action="{{ route('partner_edit_action', $p->id_partner) }}">
						@csrf

						<div class="form-group">
							<label>Tipe</label>
							<select name="tipe" class="form-control">
								<option value="media" @if($p->tipe == 'media') selected @endif>Media Partner</option>
								<option value="sponsor" @if($p->tipe == 'sponsor') selected @endif>Sponsor</option>
							</select>
						</div>

						<div class="form-group">
							<label>Nama Perusahaan</label>
							<input type="text" name="nama" class="form-control" value="{{ $p->nama_partner }}">
						</div>
						
						<div class="form-group">
							<label>Width Logo</label>
							<input type="number" class="form-control-file" name="wid" value="{{ $p->width }}">
						</div>

						<div class="form-group">
							<label>Logo Perusahaan</label>
							<input type="file" name="img" class="form-control-file">
						</div>
						<div class="form-group">
							<div class="alert alert-danger">
								<ul>
									<li>Jika Tidak Ada Perubahan pada logo, silahkan kosongkan!</li>
								</ul>
							</div>
						</div>
							<button class="btn btn-primary">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection