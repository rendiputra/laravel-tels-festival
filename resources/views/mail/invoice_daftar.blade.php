@extends('mail.temp_mail')
@section('content')
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                    	Nama Sekolah : {{ $user->nama_sekolah }}<br>
                                    	Nama Lomba : {{ $user->nama_lomba }}<br>
                                    	Nominal : Rp.{{ number_format($user->biaya_pendaftaran + $user->kode_unik,2) }}<br>
                                    	<br>
                                    	Terima kasih telah melakukan pembayaran, silahkan klik button dibawah untuk melanjutkan!<br><br>
                                    	<table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
									    <tr>
									        <td align="center">
									            <table border="0" cellpadding="0" cellspacing="0" role="presentation">
									                <tr>
									                    <td>
									                        <a href="{{ url('/cup/user/dash') }}" class="button button-green" target="_blank">Lanjut</a>
									                    </td>
									                </tr>
									            </table>
									        </td>
									    </tr>
                                    </td>
                                </tr>
                            </table>
                        </td>
@endsection