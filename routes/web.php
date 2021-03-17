<?php

use Illuminate\Support\Facades\Route;

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
//////////////////////////////////////     GUEST   //////////////////////////////////////

//////////////////////      INDEX BERITA & KEGIATAN     //////////////////
Route::get('/', 'IndexController@index')->name('index');
Route::get('/berita/{slug}', 'IndexController@berita')->name('berita');
Route::get('/index/aktifitas', 'IndexController@index_berita')->name('index.aktifitas');

//////////////////////      PROFIL     //////////////////
Route::get('/profil/{name}', 'IndexController@profil')->name('profil');
Route::get('/organisasi/{name}', 'IndexController@organisasi')->name('organisasi');
Route::get('/produk-hukum', 'IndexController@index_hukum')->name('index.hukum');

//////////////////////////////////////     ADMIN   //////////////////////////////////////

//////////////////////      BERITA      //////////////////
Route::get('/admin/berita/index', 'BeritaController@index_admin')->name('index.berita');
Route::get('/admin/berita/form-tambah', 'BeritaController@show_form')->name('form-tambah.berita');
Route::post('/admin/berita/tambah', 'BeritaController@create')->name('post.berita');
Route::post('/tinymce', 'BeritaController@tinymce');
Route::get('/admin/berita/form-edit/{id}', 'BeritaController@show')->name('form-edit.berita');
Route::patch('/admin/berita/edit/{id}', 'BeritaController@edit')->name('edit.berita');
Route::delete('/admin/berita/delete/{id}', 'BeritaController@destroy')->name('delete.berita');

/////////////////////       PROFIL      //////////////////
Route::get('/admin/profil/index', 'ProfilController@index')->name('index.profil');
Route::get('/admin/profil/form-tambah', 'ProfilController@formtambah')->name('form-tambah.profil');
Route::post('/admin/profil/tambah', 'ProfilController@create')->name('post.profil');
Route::get('/admin/profil/form-edit/{id}', 'ProfilController@edit')->name('form-edit.profil');
Route::patch('/admin/profil/edit/{id}', 'ProfilController@edit_post')->name('edit.profil');
Route::delete('/admin/profil/delete/{id}', 'ProfilController@destroy')->name('delete.profil');

/////////////////////       ORGANISASI     //////////////////
Route::get('/admin/organisasi/index', 'OrganisasiController@index')->name('index.organisasi');
Route::get('/admin/organisasi/form-tambah', 'OrganisasiController@formtambah')->name('form-tambah.organisasi');
Route::post('/admin/organisasi/tambah', 'OrganisasiController@create')->name('post.organisasi');
Route::get('/admin/organisasi/form-edit/{id}', 'OrganisasiController@edit')->name('form-edit.organisasi');
Route::patch('/admin/organisasi/edit/{id}', 'OrganisasiController@edit_post')->name('edit.organisasi');
Route::delete('/admin/organisasi/delete/{id}', 'OrganisasiController@destroy')->name('delete.organisasi');

/////////////////////       PRODUK HUKUM     //////////////////
Route::get('/admin/produk-hukum/index', 'ProdukHukumController@index')->name('index.produk-hukum');
Route::get('/admin/produk-hukum/form-tambah', 'ProdukHukumController@form_tambah')->name('form-tambah.produk-hukum');
Route::post('/admin/produk-hukum/post', 'ProdukHukumController@create')->name('post.produk-hukum');
Route::get('/admin/produk-hukum/form-edit/{id}', 'ProdukHukumController@form_edit')->name('form-edit.produk-hukum');
Route::patch('/admin/produk-hukum/edit/{id}', 'ProdukHukumController@edit')->name('edit.produk-hukum');
Route::delete('/admin/produk-hukum/delete/{id}', 'ProdukHukumController@destroy')->name('delete.produk-hukum');

/////////////////////       JABATAN    //////////////////
Route::get('/admin/jabatan/index', 'JabatanController@index')->name('index.jabatan');
Route::get('/admin/jabatan/form-tambah', 'JabatanController@form_tambah')->name('form-tambah.jabatan');
Route::post('/admin/jabatan/post', 'JabatanController@create')->name('post.jabatan');
Route::get('/admin/jabatan/form-edit/{id}', 'JabatanController@edit')->name('form-edit.jabatan');
Route::patch('/admin/jabatan/edit/{id}', 'JabatanController@update')->name('edit.jabatan');
Route::delete('/admin/jabatan/delete/{id}', 'JabatanController@destroy')->name('delete.jabatan');

/////////////////////       PEGAWAI    //////////////////
Route::get('/admin/pegawai/index', 'PegawaiController@index')->name('index.pegawai');
Route::get('/admin/pegawai/form-tambah', 'PegawaiController@form_tambah')->name('form-tambah.pegawai');
Route::post('/admin/pegawai/post', 'PegawaiController@create')->name('post.pegawai');
Route::get('/admin/pegawai/form-edit/{id}', 'PegawaiController@edit')->name('form-edit.pegawai');
Route::patch('/admin/pegawai/edit/{id}', 'PegawaiController@update')->name('edit.pegawai');
Route::delete('/admin/pegawai/delete/{id}', 'PegawaiController@destroy')->name('delete.pegawai');

/////////////////////       HEADER   //////////////////
Route::get('/admin/header/index', 'HeaderController@index')->name('index.header');
Route::get('/admin/header/form-tambah', 'HeaderController@form_tambah')->name('form-tambah.header');
Route::post('/admin/header/post', 'HeaderController@create')->name('post.header');
Route::get('/admin/header/form-edit/{id}', 'HeaderController@edit')->name('form-edit.header');
Route::patch('/admin/header/edit/{id}', 'HeaderController@update')->name('edit.header');
Route::delete('/admin/header/delete/{id}', 'HeaderController@destroy')->name('delete.header');


/////////////////////       AGENDA  ////////////////////
Route::get('/admin/agenda/index', 'AgendaController@index')->name('index.agenda_kejari');
Route::get('/admin/agenda/form-tambah', 'AgendaController@form_tambah')->name('form-tambah.agenda');
Route::post('/admin/agenda/post', 'AgendaController@create')->name('post.agenda');
Route::get('/admin/agenda/form-edit/{id}', 'AgendaController@edit')->name('form-edit.agenda');
Route::patch('/admin/agenda/edit/{id}', 'AgendaController@update')->name('edit.agenda');
Route::delete('/admin/agenda/delete/{id}', 'AgendaController@destroy')->name('delete.agenda');
