<!DOCTYPE html>
<html>
<head>
	<title>Test Print</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
	body {
        width: 210mm;
        height: 297mm;
        margin: 0;
        padding: 0;
        font: 12pt "Tahoma";
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
    #rahasia{
        position: absolute;
        top: 5;
        right:5;
    }
    .nama{
        position: relative;
        left: 3.2cm;
        top: -5.3cm;
        width: 5cm;
        font-family: Impact;
        color: white;
    }
    .lomba{
        position: relative;
        left: 3.2cm;
        top: -4.9cm;
        font-family: Impact;
        color: white;
    }
    .sekolah{
        position: relative;
        left: 3.2cm;
        top: -4.4cm;
        width: 5.3cm;
        font-family: Impact;
        color: white;
    }
    .gambar{
        position: absolute;
        left: 3.3cm;
        top: 3.1cm;
        width: 2.5cm;
        height: 3cm;
        font-family: Impact;
        color: white;        
    }
    .relative{
        position: relative;
        top: 0;
        left: 0;
        width: 9cm; 
        height: 12cm;
        background-color: rgba(0,0,0,0.5);
    }
	</style>
</head>
<body>
    <table>
        <tr>
@php $i=1; @endphp
@foreach($data as $d)
            <td>
                <div class="relative">
                    <img style="margin:2px;width: 9cm; height: 12cm;" src="{{ public_path('images/name_tag.jpg') }}">
                    <img class="gambar" src="{{ public_path('images/pas_foto/'.$d->img)}}">
                    <div class="nama"><b>{{ $d->nama }}</b></div>
                    <div class="lomba"><b>{{ $lomba->nama_lomba }}</b></div>
                    <div class="sekolah"><b>{{ $lomba->nama_sekolah }}</b></div>
                </div>
            </td>
@if($i%2 == 0)
        </tr>
        <tr>
@endif
@php
$i++;
@endphp
@endforeach
        </tr>
    </table>
</body>
</html>