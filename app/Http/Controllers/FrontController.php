<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// Model
use App\bidang_lomba;
use App\sarkom;
use App\konfirmasi_payment;
use App\pendaftaran;

class FrontController extends Controller
{
    public function cup()
    {
        $lomba = DB::table('bidang_lomba')->get();
        $sponsor = DB::table('partner')
                    ->where('tipe','sponsor')
                    ->get();
        $media = DB::table('partner')
                    ->where('tipe','media')
                    ->get();
        return view('cup',[
                'lomba'=>$lomba,
                'sponsor'=>$sponsor,
                'media'=>$media,
            ]);
    }
    public function cup_detail($name)
    {
        $name = str_replace('-',' ', $name);
        // return $name;
        $data = DB::table('bidang_lomba')
                ->where('nama_lomba',$name)
                ->first();

        if($data){
            return view('lomba',['data'=>$data]);            
        }
        
        return abort(404);
    }
    public function sarkom(Request $req)
    {
        $data = new sarkom;
        $data->nama = $req->nama;
        $data->email = $req->email;
        $data->sarkom = $req->saran;
        if($data->save()){
            return redirect('/#contact')->with('sukses_sarkom','Saran dan Komentar Kamu telah kami terima! Terimakasih atas Feedback kamu.');
        }
        return back();
    }
    public function delete_lewat()
    {
        $data = DB::table('pendaftaran')
            ->where('pembayaran', 0)
            ->get();
        foreach($data as $d){
            $payment = DB::table('konfirmasi_payment')
                        ->where('id_daftar',$d->id_daftar)
                        ->get();

            if(count($payment) < 1){

                $now = date('Y-m-d');
                $close = date('Y-m-d',strtotime($d->tgl_kadaluarsa));
                
                echo 'RUN <br>';
                echo $now .' | '.$close .'<br>';
                if($now > $close){
                    // echo 'DELETE <br>';
                    $z = pendaftaran::find($d->id_daftar);
                    $z->delete();
                    
                }else{
                    // echo 'NOT DELETE <br>';
                }
            }
        }
        echo '<pre>';
        $data2 = DB::table('users')->where('email_verified_at', NULL)->get();
        print_r($data2);
    }
}
