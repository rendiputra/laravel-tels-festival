	<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mail', function () {
    return view('mail.invoice_daftar');
});

Route::get('/delete_alter','FrontController@delete_lewat');


Route::get('/print',function(){
	return view('test_print');
});
Route::get('/cup','FrontController@cup');
Route::get('/cup/{name}','FrontController@cup_detail')->name('lomba');
Route::post('/sarkom','FrontController@sarkom')->name('sarkom');

Auth::routes(['verify' => true]);

Route::group(['middleware'=>'isVerif'],function(){

	Route::group(['middleware'=>'isNotAdmin'],function(){
    	Route::get('/cup/{id}/daftar','HomeController@regis_lomba')->name('daftar_lomba');
    
    	Route::get('/cup/pembayaran/{id_pembayaran}','HomeController@jum_bayar')->name('jum_bayar');
    	Route::post('/cup/pembayaran/upload_bukti','HomeController@upload_bukti')->name('up_bukti');
    
    
    	Route::get('/cup/user/dash','HomeController@dash_user')->name('dash_user');
    	Route::get('/cup/user/manage/{id_daftar}','HomeController@manage_peserta')->name('manage_peserta');
    	Route::post('/cup/user/manage/add_peserta','HomeController@add_peserta')->name('add_peserta');
    	Route::get('/cup/user/manage/peserta/{id_data_peserta}','HomeController@edit_peserta')->name('edit_peserta');
    	Route::post('/cup/user/manage/peserta/edit','HomeController@edit_peserta_action')->name('edit_peserta_action');
    	Route::get('/cup/user/manage/peserta/{id_data_peserta}/delete','HomeController@delete_peserta')->name('delete_peserta');
    
    	Route::post('/cup/user/dash/change/data_lomba','HomeController@edit_data_lomba')->name('edit_data_lomba');
    
    	Route::get('/cup/user/validate/{id_daftar}','HomeController@valid_peserta')->name('valid_peserta');
    	Route::get('/cup/user/validate/{id_daftar}/valid','HomeController@act_valid_peserta')->name('act_valid_peserta');
    
    
    	Route::get('/cup/user/reregis/{id_daftar}','HomeController@reregis')->name('reregis');
	});

	Route::group(['middleware'=>'isAdmin'],function(){

		Route::get('/cup/admin/dash', 'HomeController@index')->name('home');
		Route::get('/cup/admin/lomba','HomeController@lomba')->name('admin_lomba');
		Route::post('/cup/admin/lomba','HomeController@tambah_lomba')->name('lomba_tambah');
		Route::get('/cup/admin/lomba/{id_bidang_lomba}','HomeController@edit_lomba')->name('edit_lomba');
		Route::get('/cup/admin/lomba/{id_bidang_lomba}/peserta','HomeController@peserta_lomba')->name('peserta_lomba');
		Route::post('/cup/admin/lomba/edit','HomeController@act_edit_lomba')->name('act_edit_lomba');

		Route::get('/cup/admin/id_card/{id_daftar}','HomeController@id_card')->name('id_card');

		Route::get('/cup/admin/steambagan','HomeController@steambagan')->name('steambagan');

		Route::get('/cup/admin/user','HomeController@user_manage')->name('user_manage');
		Route::get('/cup/admin/user/{id_user}/{id_daftar}','HomeController@user_lomba_manage')->name('user_lomba_manage');

		Route::get('/cup/admin/partner','HomeController@partner')->name('partner');
		Route::post('/cup/admin/partner/add','HomeController@partner_add')->name('partner_add');
		Route::get('/cup/admin/partner/{id_partner}','HomeController@partner_edit')->name('partner_edit');
		Route::post('/cup/admin/partner/{id_partner}/edit','HomeController@partner_edit_action')->name('partner_edit_action');
		Route::get('/cup/admin/partner/{id_partner}/delete','HomeController@partner_delete')->name('partner_delete');


		Route::get('/cup/admin/daftar_ulang','HomeController@daftar_ulang')->name('daftar_ulang');
		Route::get('/cup/admin/daftar_ulang/{id_daftar}','HomeController@daftar_ulang_action')->name('daftar_ulang_action');

		Route::get('/cup/admin/confirm_payment','HomeController@confirm_page')->name('confirm');
		Route::get('/cup/admin/confirm_payment/{id_payment}/{id_daftar}/{status}','HomeController@confirm_action')->name('confirm_action');
	});
});
