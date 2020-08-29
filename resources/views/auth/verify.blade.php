@extends('layouts.user')

@section('content')
<section class="verif" style="max-height: 100%; height: 100%;">
    <div class="container">
        <div class="spacer"></div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verifikasi Email Anda</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                Verifikasi Email telah kami kirim ke email anda.
                            </div>
                        @endif
                        Silahkan cek email anda, agar dapat melanjutkan ke halaman selanjutnya! <br>
                        Jika tidak menerima email, silahkan cek pada folder spam email anda! <br>
                        Klik button dibawah untuk meminta pengiriman email kembali <br><br>
                        Harap tunggu beberapa saat <br><br>
                         <a class="btn btn-primary" href="{{ route('verification.resend') }}">Resend email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
