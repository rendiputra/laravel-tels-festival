@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-12 col-sm-12 col-12">
				<div class="card" style="padding: 30px">
					<h4>Manage Streaming & Bagan</h4>
					<hr>
					<h5>Streaming</h5>
					<div class="container">
						<div class="row justify-content-center">
	@foreach($lomba as $d)
		@if($d->nama_lomba == "Free Fire" or $d->nama_lomba == "Auto Chess" or $d->nama_lomba == "Mobile Legend")
							<div class="col col-md-6">
								<div class="card text-center" style="padding: 15px;margin-bottom: 10px;">
									<h6>{{ $d->nama_lomba }}</h6>
									<hr>
			@if($d->link_stream == NULL)
									<a href="">Tambah Link Stream</a>
			@else
			@endif
								</div>
							</div>
		@endif
	@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
@endsection