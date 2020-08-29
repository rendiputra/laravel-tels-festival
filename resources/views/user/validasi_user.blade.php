@extends('layouts.user')
@section('content')
<section class="validate_user" style="background-color: #E7E7E7;">
    <div class="container">
        <div class="spacer"></div>
        <div class="card" style="padding:20px;">
            <h5>PERSETUJUAN</h5>
            <div class="form-group">    
                <textarea readonly class="form-control" style="height:200px">
                    - Data yang peserta yang telah di input tidak dapat lagi rubah setelah menyetujui persyaratan ini!
                    - Data yang peserta yang tidak sesuai saat pelaksanaan lomba dapat di diskualifikasi tanpa pemberitahuan sebelumnya!
                    - Harap periksa data dibawah sebelum menyetujuinya!
                </textarea>
            </div>
            <div class="form-group">
                Nama Lomba : <b class="form-control">{{$data_lomba->nama_lomba}}</b><br>
                Nama Sekolah : <b class="form-control">{{$data_lomba->nama_sekolah}}</b> <br>
                Nama Peserta : <br>
                @foreach($data_peserta as $d)
                    @if($data_lomba->id_daftar == $d->id_daftar)
                    - <b>{{ $d->nama }}</b> <br>
                    @endif
                @endforeach
            </div>
            <div class="form-group">
                <input type="checkbox" id="setuju" name="setuju" value="ya"> Saya telah membaca ketentuan diatas, dan menyetujui hal-hal diatas.
            </div>
            <a href="{{ route('act_valid_peserta',$data_lomba->id_daftar) }}" class="btn btn-primary disabled" id="btn">Ya</a>
        </div>
    </div>
    <div class="spacer"></div>
</section>
@endsection
@section('js')
        <script type="text/javascript">
            $(document).ready(function(){
                 $('#setuju').change(function(){
                     var check = document.getElementById('setuju');
                     var button = document.getElementById('btn');
                     if(check.checked == true){
                        $('#btn').removeClass('disabled');
                     }else{
                        $('#btn').addClass('disabled');
                     }
                 });
            });
        </script>
@endsection