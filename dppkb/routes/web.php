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

use App\Mail\KirimProgram;

Auth::routes(['verify' => true]);

Route::get('/send-mail', function () {

    Mail::to('admin@admin.com')->send(new KirimProgram()); 

    return 'A message has been sent to Mailtrap!';

});

Route::get('/', 'BerandaController@index');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::resource('/tag', 'TagController');
Route::resource('/infografis', 'InfografisController');
Route::get('/berita/arsip', 'BeritaController@arsip')->name('berita.arsip');
Route::resource('/berita', 'BeritaController');
Route::post('/berita/{slug}/komentar', 'KomentarController@store')->name('berita.komentar.store');
Route::delete('/komentar/destroy/{id}', 'KomentarController@destroy')->name('komentar.destroy');
Route::get('/pengumuman/arsip', 'PengumumanController@arsip')->name('pengumuman.arsip');
Route::get('/pengumuman/download/{id}', 'PengumumanController@download')->name('pengumuman.download');
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
Route::resource('/program', 'ProgramController');
Route::resource('/kegiatan', 'KegiatanController');
Route::resource('/subkeg', 'SubkegController');
Route::get('/kelola_program','DropdownController@index')->name('kelola_program.index');
Route::get('/getUnit/{id}','DropdownController@getUnit');
Route::get('/getProgram/{id}','DropdownController@getProgram');
Route::get('/getKegiatan/{id}','DropdownController@getKegiatan');
Route::get('/getSubkeg/{id}','DropdownController@getSubkeg');
Route::post('/kelola_program/store','DropdownController@store')->name('kelola_program.store');
Route::get('/kirimemail','KirimController@index');
Route::get('/program_kegiatan', 'Tampil_programController@index')->name('tampil_program.index');