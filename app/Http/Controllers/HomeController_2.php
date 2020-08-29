<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Fpdf;
use image;
use DB;
use Auth;
// Model
use App\bidang_lomba;
use App\pendaftaran;
use App\data_pendaftar;
use App\konfirmasi_payment;
use App\Mail\Invoice;
use App\partner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lomba = DB::table('bidang_lomba')
            ->get();
        $user = DB::table('users')
            ->get();
        $pendaftaran = DB::table('pendaftaran')
            ->get();
        return view('admin.dash',[
            'lomba'=>$lomba,
            'user'=>$user,
            'pendaftaran'=>$pendaftaran
        ]);
    }

    public function regis_lomba($id)
    {
        
        // $user_has_register = DB::table('pendaftaran')->where([['id_user','=',Auth::user()->id],['id_bidang_lomba','=',$id]])->get();
        // if(count($user_has_register) < 1){
        //     $random = rand(1,999);

        //     $pendaftaran = new pendaftaran;

        //     $pendaftaran->id_user = Auth::user()->id;
        //     $pendaftaran->id_bidang_lomba = $id;
        //     $pendaftaran->tgl_kadaluarsa = date("Y-m-d h:m:s", strtotime("+ 3 day"));
        //     $pendaftaran->kode_unik = $random;
        //     $pendaftaran->kode_daftarulang = $this->random_string(10);
        //     if($pendaftaran->save()){
        //         $pendaftaran = DB::table('pendaftaran')->where([['id_user','=',Auth::user()->id],['id_bidang_lomba','=',$id]])->first();
        //         return redirect('/cup/user/dash');
        //     }

        $peserta = DB::table('pendaftaran')
                    ->where(['id_bidang_lomba'=>$id,'id_user'=>Auth::user()->id])
                    ->get();

        $data = DB::table('bidang_lomba')
                    ->where('id_bidang_lomba',$id)
                    ->first();

        // return "Peserta :". count($peserta) ."<br> Maksimal persekolah : " .$data->max; 
        if(count($peserta) < $data->max){
            $random = rand(1,999);

            $pendaftaran = new pendaftaran;

            $pendaftaran->id_user = Auth::user()->id;
            $pendaftaran->id_bidang_lomba = $id;
            $pendaftaran->tgl_kadaluarsa = date("Y-m-d h:m:s", strtotime("+ 3 day"));
            $pendaftaran->kode_unik = $random;
            $pendaftaran->kode_daftarulang = $this->random_string(10);
            if($pendaftaran->save()){
                $pendaftaran = DB::table('pendaftaran')->where([['id_user','=',Auth::user()->id],['id_bidang_lomba','=',$id]])->first();
                return redirect('/cup/user/dash')->with('sukses','Berhasil menambah lomba!');
            }

        }
        return redirect('/cup/user/dash')->with('eror','Gagal menambah lomba!');

    }
    public function jum_bayar($id_pembayaran)
    {
        $data = DB::table('pendaftaran')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->where([
                    ['pendaftaran.id_user','=',Auth::user()->id],
                    ['pendaftaran.id_daftar','=',$id_pembayaran],
                    ['pendaftaran.pembayaran','=',false],
                ])
                ->get();
        if(count($data) > 0){
            $output_data =DB::table('pendaftaran')
                    ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                    ->where([['pendaftaran.id_user','=',Auth::user()->id],['pendaftaran.id_daftar','=',$id_pembayaran]])
                    ->first();

            return view('user.payment',['payment'=>$output_data]);
        }

        return redirect('/cup/user/dash');
    }
    public function dash_user()
    {
        $data = DB::table('pendaftaran')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->where('pendaftaran.id_user',Auth::user()->id)
                ->orderBy('bidang_lomba.nama_lomba','ASC')
                ->get();

        $data2 = DB::table('data_pendaftar')
                ->get();

        $data3 = DB::table('konfirmasi_payment')
                ->get();
        return view('user.index',['user_data'=>$data,'data2'=>$data2,'data3'=>$data3]);
    }
    public function manage_peserta($id_daftar)
    {
        $data = DB::table('data_pendaftar')
                ->join('pendaftaran','data_pendaftar.id_daftar','pendaftaran.id_daftar')
                ->where('data_pendaftar.id_daftar',$id_daftar)
                ->get();
        $data2 =  DB::table('pendaftaran')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->where([['pendaftaran.id_user','=',Auth::user()->id],['pendaftaran.id_daftar','=',$id_daftar]])
                ->first();
        $bulan = $this->bulan();
        return view('user.manage_peserta',['manage'=>$data,'data_lomba'=>$data2,'bulan'=>$bulan]);
    }
    public function add_peserta(Request $req)
    {

        $data = new data_pendaftar;
        $data->id_daftar = $req->id_daftar;
        $data->nisn = $req->nisn;
        $data->nama = $req->nama_peserta;
        $data->tgl_lahir = $req->thn .'-'.$req->bln.'-'.$req->tgl;
        $data->contact_person = $req->cp;
        if($req->lomba == "Free Fire" or $req->lomba == "Auto Chesh" or $req->lomba == "Mobile Legend"){
            $data->idgame = $req->idgame;
            $data->nickname = $req->nickname;
        }elseif($req->lomba == "Short Movie"){
            $data->job_desk = $req->jobdeks;
        }elseif($req->lomba == "Futsal SMP" or $req->lomba == "Futsal SMA"){
            $data->no_punggung = $req->no_punggung;
        }

        $this->validate($req,[
            'img'=>'image|mimes:png,jpg,jpeg',
            'img_kartupelajar'=>'image|mimes:png,jpg,jpeg',
        ]);
        $image = $req->img;
        $image_2 = $req->img_kartupelajar;

        $name = $req->id_daftar.'_'.time().'.'.$image->getClientOriginalExtension();
        $name_2 = $req->id_daftar.'_kartupelajar_'.time().'.'.$image_2->getClientOriginalExtension();

        $lokasi = public_path('images/pas_foto');
        if($image->move($lokasi,$name)){
            if($image_2->move($lokasi,$name_2)){
                $data->img = $name;
                $data->img_kartupelajar = $name_2;
                if($data->save()){
                    return back()->with('sukses','Berhasil Menambah Data!');
                }
            }
        }

        return back()->with('eror','Gagal Menambah Data!');
    }
    public function edit_peserta($id_data_daftar)
    {
        $data = DB::table('data_pendaftar')
                ->join('pendaftaran','data_pendaftar.id_daftar','pendaftaran.id_daftar')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->where('id_data_daftar',$id_data_daftar)
                ->first();
        $bulan = $this->bulan();
        
        return view('user.edit',['d'=>$data,'bulan'=>$bulan]);

    }
    public function edit_peserta_action(Request $req)
    {   
        $d = data_pendaftar::find($req->id_data_daftar);

        if($d){        
            $d->nisn = $req->nisn;
            $d->nama = $req->nama;
            $d->tgl_lahir = $req->thn .'-'.$req->bln.'-'.$req->tgl;
            $d->contact_person = $req->cp;
            if($req->lomba == "Free Fire" or $req->lomba == "Auto Chesh" or $req->lomba == "Mobile Legend"){
                $d->idgame = $req->idgame;
                $d->nickname = $req->nickname;
            }elseif($req->lomba == "Short Movie"){
                $d->job_deks = $req->jobdeks;
            }elseif($req->lomba == "Futsal SMP" or $req->lomba == "Futsal SMA"){
                $d->no_punggung = $req->no_punggung;
            }
            if($req->img){

                $this->validate($req,[
                    'img'=>'image|mimes:png,jpg,jpeg',
                ]);
                $image = $req->img;

                $name = $req->id_daftar.'_'.time().'.'.$image->getClientOriginalExtension();
                $lokasi = public_path('images/pas_foto');

                $image->move($lokasi,$name);
            }
            if($req->img_kartupelajar){

                $this->validate($req,[
                    'img'=>'image|mimes:png,jpg,jpeg',
                    'img_kartupelajar'=>'image|mimes:png,jpg,jpeg',
                ]);
                $image2 = $req->img_kartupelajar;

                $name_2 = $req->id_daftar.'_kartupelajar_'.time().'.'.$image_2->getClientOriginalExtension();
                $lokasi = public_path('images/pas_foto');

                $image2->move($lokasi,$name_2);
            }

            if($d->save()){
                return back()->with('sukses','Berhasil Merubah Data!');
            }
        }
        return abort(404);

    }
    public function delete_peserta($id_data_peserta)
    {
        $d = data_pendaftar::find($id_data_peserta);
        if(!empty($d)){
            if($d->delete()){
                return back();
            }
        }

        return abort(404);
    }
    public function upload_bukti(Request $req)
    {
        $this->validate($req,[
            'img'=>'required|image|mimes:jpg,jpeg,png',
            'id_daftar'=>'required',
            'pengirim'=>'required',
        ]);

        $data = DB::table('konfirmasi_payment')->where('id_daftar',$req->id_daftar)->get();

        if(count($data) > 0){
            return back()->with('sukses','Anda telah mengupload bukti pembayaran! Silahkan tunggu 1x24 jam atau hubungi admin!');
        }

        $new = new konfirmasi_payment;
        $new->id_daftar = $req->id_daftar;
        $new->pengirim = $req->pengirim;

        $image = $req->img;
        $name = $req->id_daftar .'.'.$image->getClientOriginalExtension();
        $lokasi = public_path('images/butki');
        if($image->move($lokasi,$name)){
            $new->bukti = $name;
            if($new->save()){
                return back()->with('sukses','Berhasil mengupload bukti, Silahkan tunggu 1x24 jam atau hubungi admin!');
            }
        }
        return back()->with('eror','Gagal mengupload bukti! Silahkan coba beberapa saat lagi!');
    }
    public function valid_peserta($id_daftar)
    {

        $data =  DB::table('pendaftaran')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->join('users','pendaftaran.id_user','users.id')
                ->where([['pendaftaran.id_user','=',Auth::user()->id],['pendaftaran.id_daftar','=',$id_daftar]])
                ->first();

        if(!empty($data)){

            $data2 = DB::table('data_pendaftar')
                    ->get();

            return view('user.validasi_user',['data_lomba'=>$data,'data_peserta'=>$data2]);
        }
        return redirect('/cup/user/dash');
    }
    public function act_valid_peserta($id_daftar)
    {

        $d = pendaftaran::find($id_daftar);
        if(!empty($d)){
            $d->valid_player = 1;
            if($d->save()){
                return redirect('/cup/user/dash')->with('sukses','Berhasil memverifikasi peserta!');
            }
        }
        return redirect('/cup/user/dash')->with('eror','Gagal memverifikasi peserta!');
    }
    public function edit_data_lomba(Request $req)
    {
        $d = pendaftaran::find($req->id_daftar);

        if(!empty($d)){
            if($req->nama_lomba == "Short Movie"){
                $d->sinobsis = $req->sinopsis;
            }else if($req->nama_lomba == "Futsal SMP" or $req->nama_lomba == "Futsal SMA") {
                $d->nama_team = $req->nama_team;
                $d->nama_pelatih = $req->nama_pelatih;
                $d->no_pelatih = $req->no_pelatih;
            }

            if($d->save()){
                return back()->with('sukses','Berhasil menambah Data Lomba!');
            }
        }

        return back()->with('eror','Gagal Merubah, silahkan hubungi Admin!');
    }
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS
// ADMIN CONTROLLERS

    public function user_manage()
    {
        $data = DB::table('users')
                ->orderBy('nama_sekolah','ASC')
                ->get();
        $lomba = DB::table('pendaftaran')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->get();
        return view('admin.user',['data'=>$data,'lomba'=>$lomba]);
    }
    public function user_lomba_manage($id_user,$id_daftar)
    {
            $data = DB::table('pendaftaran')
                    ->join('users','pendaftaran.id_user','users.id')
                    ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                    ->where([
                        'pendaftaran.id_daftar'=>$id_daftar,
                        'pendaftaran.id_user'=>$id_user,
                    ])
                    ->first();
            $data2 = DB::table('data_pendaftar')
                    ->where('id_daftar',$id_daftar)
                    ->get();

            return view('admin.user_lomba',['data'=>$data,'data2'=>$data2]);
    }
    public function lomba()
    {
        $data = DB::table('bidang_lomba')->get();
        return view('admin.lomba',['data'=>$data]);
    }
    public function tambah_lomba(Request $req)
    {
        // $this->validate($req,[
        //     'img'=> 'image|mimes:png,jpg,jpeg',
        // ]);

        $img = $req->img;

        $name = time().'.'.$img->getClientOriginalExtension();
        $lokasi = public_path('images/logo');

        if($img->move($lokasi,$name)){
            $lomba = new bidang_lomba;
            $lomba->nama_lomba = $req->nama_lomba;
            $lomba->juknis = $req->juknis;
            $lomba->syarat = $req->syarat;
            $lomba->total_pemain = $req->total_pemain;
            $lomba->biaya_pendaftaran = $req->biaya;
            $lomba->max = $req->max;
            $lomba->min_total_pemain = $req->min_total_pemain;
            $lomba->cp_1 = $req->cp_1;
            $lomba->cp_2 = $req->cp_2;
            $lomba->logo_lomba = $name;

            if($lomba->save()){
                return back()->with('sukses','Berhasil Menambah Lomba!');
            }
        }
        return back()->with('eror','Gagal Menambah Lomba!');
    }
    public function peserta_lomba($id_bidang_lomba)
    {
        $lomba = DB::table('bidang_lomba')
                ->where('id_bidang_lomba',$id_bidang_lomba)
                ->first();

        $pendaftaran = DB::table('pendaftaran')
                ->join('users','pendaftaran.id_user','users.id')
                ->where('id_bidang_lomba',$lomba->id_bidang_lomba)
                ->get();
        $peserta = DB::table('data_pendaftar')
                ->get();

        return view('admin.peserta_lomba',[
            'lomba'=>$lomba,
            'pendaftaran'=>$pendaftaran,
            'peserta'=>$peserta
        ]);
    }
    public function confirm_page()
    {
        $data = DB::table('konfirmasi_payment')
                ->where([
                    'konfirmasi_payment.status'=>'uncheck',
                ])
                ->join('pendaftaran','konfirmasi_payment.id_daftar','pendaftaran.id_daftar')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->join('users','pendaftaran.id_user','users.id')
                ->get();
        $data_2 = DB::table('pendaftaran')
                ->where([
                    'pendaftaran.pembayaran'=>0,
                ])
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->join('users','pendaftaran.id_user','users.id')
                ->get();
        return view('admin.confirm_page',['prioritas'=>$data,'non'=>$data_2]);
    }
    public function confirm_action($id_payment,$id_daftar,$status)
    {
        $konfirmasi_payment = konfirmasi_payment::find($id_payment);
        $konfirmasi_payment->status = $status;
        
        $data = DB::table('pendaftaran')
                ->where('pendaftaran.id_daftar',$id_daftar)
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->join('users','pendaftaran.id_user','users.id')
                ->first();

        $pendaftaran = pendaftaran::find($id_daftar);
        if($status == 'valid'){
            $pendaftaran->pembayaran = TRUE;

            Mail::to($data->email)->send(new Invoice($data));
        }else{
            $pendaftaran->pembayaran = FALSE;
        }
      
        if($konfirmasi_payment->save()){
            if($pendaftaran->save()){
                return back()->with('sukses', 'Berhasil Melakukan Feedback!');
            }
        }

        return back();
    }
    public function random_string($n)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    }
    public function partner()
    {
        $data = DB::table('partner')
            ->orderBy('tipe','ASC')
            ->get();

        return view('admin.partner',['data'=>$data]);
    }
    public function partner_add(Request $req)
    {
        $this->validate($req,[
            'img'=>'image|mimes:jpg,jpeg,png',
        ]);

        $image = $req->img;
        $img_name = time() . '.' . $image->getClientOriginalExtension();
        $lokasi = public_path('images/partner');

        if($req->wid >= 100){
            $wid_logo = 100;
        }else{
            $wid_logo = $req->wid;
        }

        $q = new partner;

        $q->tipe = $req->tipe;
        $q->nama_partner = $req->nama_partner;
        $q->logo = $img_name;
        $q->width = $wid_logo;

        if($image->move($lokasi,$img_name)){
            if($q->save()){
                return back()->with('sukses','Berhasil menambah Partner!');
            }
        }
        return back()->with('eror','Error!');
    }
    public function partner_edit($id_partner)
    {
        $data = DB::table('partner')
                ->where('id_partner',$id_partner)
                ->first();
        return view('admin.partner_edit',['p'=>$data]);
    }
    public function partner_edit_action($id_partner, Request $req)
    {
        if($req->wid >= 100){
            $wid_logo = 100;
        }else{
            $wid_logo = $req->wid;
        }

        $p = partner::find($id_partner);
        $p->tipe = $req->tipe;
        $p->nama_partner = $req->nama;
        $p->width = $wid_logo;
        if($req->img){
            $image = $req->img;
            $name = time().'.'. $image->getClientOriginalExtension();
            $lokasi = public_path('images/partner');
            $image->move($lokasi,$name);

            $p->logo = $name;
        }
        if($p->save()){
            return redirect('/cup/admin/partner')->with('sukses','Berhasil Update!');
        }

        return redirect('/cup/admin/partner')->with('eror','Gagal update!');
    }
    public function partner_delete($id_partner)
    {
        $data = partner::find($id_partner);
        if($data->delete()){
            return redirect('/cup/admin/partner')->with('sukses','Berhasil hapus partner!');            
        }
    }
    public function daftar_ulang()
    {
        $data = DB::table('pendaftaran')
                ->join('users','pendaftaran.id_user','users.id')
                ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->where([
                    'pembayaran'=>TRUE,
                    'daftar_ulang'=>false,
                ])
                ->get();
        $data2 = DB::table('data_pendaftar')
                ->get();
        return view('admin.daftar_ulang',['data'=>$data,'data2'=>$data2]);
    }
    public function daftar_ulang_action($id_daftar)
    {
        $d = pendaftaran::find($id_daftar);
        if($d){
            $d->daftar_ulang = TRUE;
            if($d->save()){
                return back();
            }
        }
        return abort(404);
    }
    public function edit_lomba($id_bidang_lomba)
    {
    	$d = bidang_lomba::find($id_bidang_lomba);
    	if($d){
    		return view('admin.edit_lomba',['data'=>$d]);
    	}
    	return redirect('/cup/admin/dash');
    }
    public function act_edit_lomba(Request $req)
    {
    	$d = bidang_lomba::find($req->id_bidang_lomba);
    	
    	if($d){
    		$d->nama_lomba = $req->nama_lomba;
    		$d->min_total_pemain = $req->min_total_pemain;
    		$d->total_pemain = $req->total_pemain;
    		$d->biaya_pendaftaran = $req->biaya_pendaftaran;	
    		$d->syarat = $req->syarat;
            $d->tm = $req->tm;
            $d->lomba = $req->lomba;
            $d->pendaftaran = $req->pendaftaran;
            $d->cp_1 = $req->cp_1;
            $d->cp_2 = $req->cp_2;

    		if($d->save()){
    			return redirect('/cup/admin/lomba')->with('sukses','Berhasil Merubah Data!');
    		}
    	}

        // dd($d);
    	return redirect('/cup/admin/dash');
    }
    public function steambagan()
    {
    	$d = DB::table('bidang_lomba')
    		->get();
    	return view('admin.streambagan',['lomba'=>$d]);
    }
////
    ///
    ////
    //////
    ///////
    ////////
////
    public function reregis($id_daftar)
    {
        $data = DB::table('pendaftaran')
            ->join('users','pendaftaran.id_user','users.id')
            ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
            ->where('pendaftaran.id_daftar',$id_daftar)
            ->first();
        $data_2 = DB::table('data_pendaftar')
                ->where('id_daftar',$id_daftar)
                ->get();

        $pdf = \PDF::loadView('test_print',['data'=>$data,'data2'=>$data_2]);
        return $pdf->download('daftar_ulang.pdf');
    }
    public function id_card($id_daftar)
    {
        $data = DB::table('pendaftaran')
            ->join('users','pendaftaran.id_user','users.id')
            ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
            ->where('pendaftaran.id_daftar',$id_daftar)
            ->first();

        $data_2 = DB::table('data_pendaftar')
                ->where('id_daftar',$id_daftar)
                ->get();
        $pdf = \PDF::loadView('admin.print_nametag',['lomba'=>$data,'data'=>$data_2]);
        return $pdf->download('id_card.pdf');        
            // return view('admin.print_nametag',['lomba'=>$data,'data'=>$data_2]);
        
    }
    public function bulan(){
        $array = array("","Januari","Februaru","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        return $array;
    }
}
