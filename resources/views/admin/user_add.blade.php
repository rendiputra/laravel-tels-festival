@extends('layouts.user')
@section('content')
<section>
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-7 col-sm-10 col-12">
				<form method="POST" action="{{ route('user_add_act') }}">
					@csrf
                    <input type="text" id="clipboard" style="border:none; color:white; margin-top: 5px; width: 1px;">

					<div class="card p-4">
						<h5>Tambah User</h5>
						<hr>
						<div class="form-group">
							<label>Nama Sekolah/Team</label>
							<input onkeyup="CreateEmail()" id="nama_sekolah" class="form-control" type="text" name="nama_sekolah" required>
						</div>
						<div class="form-group">
							<label>Alamat Sekolah</label>
							<textarea class="form-control" name="alamat" required></textarea>
						</div>
						<div class="form-group">
							<label>Nama Penanggung Jawab</label>
							<input class="form-control" type="text" name="name" required>
						</div>
						<div class="form-group">
							<label>Nomor Telefon Penanggung Jawab</label>
							<input class="form-control" type="number" name="no_telfon" required>
						</div>
						<div class="form-group">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="text" id="email" name="email" value="@telscup.com" readonly>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" id="password" type="text" name="password" readonly required>
								<a style="color: blue; cursor: pointer;" onclick="generatePassword()">Random Password</a> -
								<a style="color: blue; cursor: pointer;" onclick="CopyToClipboard()">Copy to clipboard</a>
							</div>
						</div>
						<div class="form-group">
							<label>Lomba</label>
							<div class="form-group">
								<div class="row">
		@foreach($lomba as $l)
								<!-- Lomba {{ $l->nama_lomba }} -->
									<div class="col-md-8 col-sm-10 col-12">
										<input type="checkbox" name="lomba[]" value="{{ $l->id_bidang_lomba }}"> {{ $l->nama_lomba }}
									</div> 
		@endforeach

								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary" onclick="CopyToClipboard()">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
</section>
@endsection


@section('js')
<script type="text/javascript">
	function generatePassword() {
	    var length = 8,
	        charset = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
	        retVal = "";
	    for (var i = 0, n = charset.length; i < length; ++i) {
	        retVal += charset.charAt(Math.floor(Math.random() * n));
	    }
	    return document.getElementById('password').value = retVal;
	}
	function CreateEmail() {
		var name = document.getElementById('nama_sekolah').value;
		var baru = name.replace(/ /gi,'.');

		return document.getElementById('email').value = baru.toLowerCase() + '@telscup.com';
	}
	function CopyToClipboard() {
		var email = document.getElementById('email').value;
		var pass = document.getElementById('password').value;
		var copy = email + "|" + pass;
		document.getElementById('clipboard').value = copy;
		var clipboard =	document.getElementById('clipboard');
		clipboard.select();
		document.execCommand("copy");
	}
</script>
@endsection