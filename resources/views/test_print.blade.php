<!DOCTYPE html>
<html>
<head>
	<title>Daftar Ulang</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<style type="text/css">
	body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .pattern{
                position: fixed;
                bottom:   0px;
                left:     0px;
                /** The width and height may change 
                    according to the dimensions of your letterhead
                **/
                width:    190mm;
                height:   277mm;
                opacity: 0.2;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
    }
    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;

        /** Extra personal styles **/
    }
    .cop{
    	position: absolute;
    	top: 0.5cm;
    	left: 50%;
    	transform: translate(-50%,-50%);
    	text-align: center;
    }
    #rahasia{
        position: absolute;
        top: 5;
        right:5;
    }
    .img_1{
    	position: absolute;
    	top: 0.05cm;
    	left:0.4cm; 
    }
    .img_2{
    	position: absolute;
    	top: 0.05cm;
    	right:1.8cm; 
    }
    header p{
    	margin: 0;
    }
    header hr{
    	position: absolute;
    	top: 2cm;
    	left: 0cm;
    	right: 0cm;
    }
    footer{
    	position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        line-height: 2cm;
    }
	</style>
</head>
<body>
    <img class="pattern" src="https://telsfest.syntx.id/images/logo/background.png">

	<header>
		<img class="img_1" src="https://telsfest.syntx.id/images/logo/telscup.png" style="height: 1.5cm;">
		<div class="cop">
			<h3 style="margin:0;">TELESANDI CUP 2019</h3>
			<p style="font-size:10pt; margin: 0;">
				SMKS Telekomunikasi Telesandi Bekasi<br>
				Jl. KH. Mochammad, Mekarsari - Tambun Selatan 17510 <br>
				Tlp: (021) 883 32404. Fax: (021) 883 23429 <br>
				Instagram : @telesandi.festival. Email : telsscup@gmail.com
			</p>
		</div>
		<img class="img_2" src="https://kioslambang.files.wordpress.com/2011/03/lambang-osis-kuning.png" style="height: 1.5cm;">
		<hr>
	</header>
	<div class="justify-content-center">
        <br><br><br><br><br>
        <center>
	        <h2 style="margin-bottom: 0;" class="text-center">Form Daftar Ulang</h2>
	        <h3 style="margin: 0" class="text-center">Telesandi Festival</h3>
        </center>
        <br><br>
		<table width="100%" border='1' cellpadding="10" cellspacing="0" style="background-color: rgba(0,0,0,0)">
			<tr>
				<th style="width: 30%">Nama Sekolah</th>
				<td style="width: 70%">{{ $data->nama_sekolah }}</td>
			</tr>
			<tr>
				<th>Alamat Sekolah</th>
				<td>
					{{ $data->alamat_sekolah }}
				</td>
			</tr>
			<tr>
				<th>Penanggung Jawab</th>
				<td>{{ $data->name }}</td>
			</tr>
			<tr>
				<th>Nomor Yang Dapat Dihubungi</th>
				<td>{{ $data->contact_person }}</td>
			</tr>
		</table><br><br>

        <table width="100%" border='1' cellpadding="10" cellspacing="0">
            <tr>
                <th>Nama Lomba</th>
                <th>{{ $data->nama_lomba }}</th>
            </tr>
            <tr>
                <th style="width: 30%">Kode Validasi</th>
                <th style="width: 70%">{{ $data->kode_daftarulang }}</th>
            </tr>
        </table>
        <br>
        <br>
        <table width="100%" border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 30%">NISN</th>
                    <th style="width: 70%">Nama</th>
                </tr>
            </thead>
            <tbody>
@foreach($data2 as $d)
                <tr>
                    <td>{{ $d->nisn }}</td>
                    <td>{{ $d->nama }}</td>
                </tr>
@endforeach
            </tbody>
        </table>
        <br><br>
        <p>Surat ini sebagai butki pembayaran <b>Telesandi CUP</b> yang sah dan bukti telah terpenuhnya persyaratan.</p>
	</div>
</body>
</html>