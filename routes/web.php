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


Auth::routes();

Route::get('/', 'BerandaController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/program_kegiatan', 'Tampil_programController@index')->name('tampil_program.index');
Route::get('/berita/{slug}', 'TampilController@tampil_berita')->name('tampil_berita');
Route::get('/program/{slug}', 'TampilController@tampil_program')->name('tampil_program');
Route::get('/kegiatan/{slug}', 'TampilController@tampil_kegiatan')->name('tampil_kegiatan');
Route::get('/subkeg/{slug}', 'TampilController@tampil_subkeg')->name('tampil_subkeg');
Route::get('/berita/arsip', 'BeritaController@arsip')->name('berita.arsip');
Route::post('/berita/{slug}/komentar', 'KomentarController@store')->name('berita.komentar.store');
Route::delete('/komentar/destroy/{id}', 'KomentarController@destroy')->name('komentar.destroy');
Route::get('/pengumuman/arsip', 'PengumumanController@arsip')->name('pengumuman.arsip');
Route::get('/pengumuman/download/{id}', 'PengumumanController@download')->name('pengumuman.download');

Route::group(['middleware' => ['auth','bikinLevel:admin']], function(){
	Route::resource('/tag', 'TagController');
	Route::resource('/infografis', 'InfografisController');
	Route::resource('/berita', 'BeritaController');
	Route::resource('/pengumuman', 'PengumumanController');
	Route::resource('/album', 'AlbumController');
	Route::get('/foto/create/{id}', 'FotoController@create');
	Route::post('/foto/store', 'FotoController@store')->name('foto.store');
	Route::get('/foto/{id}', 'FotoController@show')->name('foto.show');
	Route::get('/foto/edit/{id}', 'FotoController@edit')->name('foto.edit');
	Route::put('/foto/update/{id}', 'FotoController@update')->name('foto.update');
	Route::delete('/foto/delete/{id}', 'FotoController@destroy')->name('foto.destroy');
	Route::resource('/agenda', 'AgendaController');
	Route::resource('/bidang', 'BidangController');
	Route::resource('/unit', 'UnitController');
	Route::resource('/pegawai', 'PegawaiController');
});

Route::group(['middleware' => ['auth','bikinLevel:admin,1']], function(){
	Route::resource('/program', 'ProgramController');
});

Route::group(['middleware' => ['auth','bikinLevel:admin,2']], function(){
	Route::resource('/kegiatan', 'KegiatanController');
});

Route::group(['middleware' => ['auth','bikinLevel:admin,3']], function(){
	Route::resource('/subkeg', 'SubkegController');
});