<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::post('/','SesiController@index');



Route::group(['middleware'=>'guru'],function(){

Route::get('wali/lihat/{wali}', 'waliController@lihat');
Route::post('wali/simpan','waliController@simpan');
Route::get('wali/edit/{wali}', 'waliController@edit');
Route::post('wali/edit/{wali}','waliController@update');
Route::get('wali/hapus/{wali}','waliController@hapus');
Route::get('wali/tambah', 'waliController@tambah');
Route::get('wali', 'waliController@awal');

Route::get('pelajaran/lihat/{pelajaran}','pelajaranController@lihat');
Route::post('pelajaran/simpan','pelajaranController@simpan');
Route::get('pelajaran/edit/{pelajaran}', 'pelajaranController@edit');
Route::post('pelajaran/edit/{pelajaran}','pelajaranController@update');
Route::get('pelajaran/hapus/{pelajaran}','pelajaranController@hapus');
Route::get('pelajaran/tambah', 'pelajaranController@tambah');
Route::get('pelajaran', 'pelajaranController@awal');

Route::get('siswa/lihat/{siswa}', 'siswaController@lihat');
Route::post('siswa/simpan','siswaController@simpan');
Route::get('siswa/edit/{siswa}', 'siswaController@edit');
Route::post('siswa/edit/{siswa}','siswaController@update');
Route::get('siswa/hapus/{siswa}','siswaController@hapus');
Route::get('siswa/tambah', 'siswaController@tambah');
Route::get('siswa', 'siswaController@awal');

Route::get('kelas/lihat/{kelas}','kelasController@lihat');
Route::post('kelas/simpan','kelasController@simpan');
Route::get('kelas/edit/{kelas}','kelasController@edit');
Route::post('kelas/edit/{kelas}','kelasController@update');
Route::get('kelas/hapus/{kelas}','kelasController@hapus');
Route::get('kelas/tambah', 'kelasController@tambah');
Route::get('kelas', 'kelasController@awal');

Route::get('jadwal_pelajaran/lihat/{jadwal_pelajaran}','jadwal_pelajaranController@lihat');
Route::post('jadwal_pelajaran/simpan','jadwal_pelajaranController@simpan');
Route::get('jadwal_pelajaran/edit/{jadwal_pelajaran}', 'jadwal_pelajaranController@edit');
Route::post('jadwal_pelajaran/edit/{jadwal_pelajaran}','jadwal_pelajaranController@update');
Route::get('jadwal_pelajaran/hapus/{jadwal_pelajaran}','jadwal_pelajaranController@hapus');
Route::get('jadwal_pelajaran/tambah', 'jadwal_pelajaranController@tambah');
Route::get('jadwal_pelajaran', 'jadwal_pelajaranController@awal');

Route::get('guru_mengajar/lihat/{guru_mengajar}', 'guru_mengajarController@lihat');
Route::post('guru_mengajar/simpan','guru_mengajarController@simpan');
Route::get('guru_mengajar/edit/{guru_mengajar}', 'guru_mengajarController@edit');
Route::post('guru_mengajar/edit/{guru_mengajar}','guru_mengajarController@update');
Route::get('guru_mengajar/hapus/{guru_mengajar}','guru_mengajarController@hapus');
Route::get('guru_mengajar/tambah', 'guru_mengajarController@tambah');
Route::get('guru_mengajar', 'guru_mengajarController@awal');

Route::get('nilai/lihat/{nilai}','nilaiController@lihat');
Route::post('nilai/simpan','nilaiController@simpan');
Route::get('nilai/edit/{nilai}', 'nilaiController@edit');
Route::post('nilai/edit/{nilai}','nilaiController@update');
Route::get('nilai/hapus/{nilai}','nilaiController@hapus');
Route::get('nilai/tambah', 'nilaiController@tambah');
Route::get('nilai', 'nilaiController@awal');

	Route::get('/pengguna', function () {
    return view('index');
});

});




Route::group(['middleware'=>'siswa'],function(){
Route::get('sangsiswa/lihat/{jadwal_pelajaran}','jadwal_pelajaranController@lihat');
Route::post('sangsiswa/simpan','jadwal_pelajaranController@simpan');
Route::get('sangsiswa/edit/{jadwal_pelajaran}', 'jadwal_pelajaranController@edit');
Route::post('sangsiswa/edit/{jadwal_pelajaran}','jadwal_pelajaranController@update');
Route::get('sangsiswa/hapus/{jadwal_pelajaran}','jadwal_pelajaranController@hapus');
Route::get('sangsiswa/tambah', 'jadwal_pelajaranController@tambah');
Route::get('sangsiswa', 'jadwal_pelajaranController@awal');



});
Route::group(['middleware'=>'wali'],function(){
Route::get('sangwali/lihat/{jadwal_pelajaran}','jadwal_pelajaranController@lihat');
Route::post('sangwali/simpan','jadwal_pelajaranController@simpan');
Route::get('sangwali/edit/{jadwal_pelajaran}', 'jadwal_pelajaranController@edit');
Route::post('sangwali/edit/{jadwal_pelajaran}','jadwal_pelajaranController@update');
Route::get('sangwali/hapus/{jadwal_pelajaran}','jadwal_pelajaranController@hapus');
Route::get('sangwali/tambah', 'jadwal_pelajaranController@tambah');
Route::get('sangwali', 'jadwal_pelajaranController@awal');



});
/*
Route::group(['middleware'=>'guru'],function(){
Route::get('wali/lihat/{wali}', 'waliController@lihat');
Route::post('wali/simpan','waliController@simpan');
Route::get('wali/edit/{wali}', 'waliController@edit');
Route::post('wali/edit/{wali}','waliController@update');
Route::get('wali/hapus/{wali}','waliController@hapus');
Route::get('wali/tambah', 'waliController@tambah');
Route::get('wali', 'waliController@awal');

Route::get('pelajaran/lihat/{pelajaran}','pelajaranController@lihat');
Route::post('pelajaran/simpan','pelajaranController@simpan');
Route::get('pelajaran/edit/{pelajaran}', 'pelajaranController@edit');
Route::post('pelajaran/edit/{pelajaran}','pelajaranController@update');
Route::get('pelajaran/hapus/{pelajaran}','pelajaranController@hapus');
Route::get('pelajaran/tambah', 'pelajaranController@tambah');
Route::get('pelajaran', 'pelajaranController@awal');

Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');
Route::get('pengguna/tambah','penggunaController@tambah');
Route::get('pengguna','penggunaController@awal');

Route::get('guru/lihat/{guru}', 'guruController@lihat');
Route::post('guru/simpan','guruController@simpan');
Route::get('guru/edit/{guru}', 'guruController@edit');
Route::post('guru/edit/{guru}','guruController@update');
Route::get('guru/hapus/{guru}','guruController@hapus');
Route::get('guru/tambah', 'guruController@tambah');
Route::get('guru', 'guruController@awal');

Route::get('siswa/lihat/{siswa}', 'siswaController@lihat');
Route::post('siswa/simpan','siswaController@simpan');
Route::get('siswa/edit/{siswa}', 'siswaController@edit');
Route::post('siswa/edit/{siswa}','siswaController@update');
Route::get('siswa/hapus/{siswa}','siswaController@hapus');
Route::get('siswa/tambah', 'siswaController@tambah');
Route::get('siswa', 'siswaController@awal');

Route::get('kelas/lihat/{kelas}','kelasController@lihat');
Route::post('kelas/simpan','kelasController@simpan');
Route::get('kelas/edit/{kelas}','kelasController@edit');
Route::post('kelas/edit/{kelas}','kelasController@update');
Route::get('kelas/hapus/{kelas}','kelasController@hapus');
Route::get('kelas/tambah', 'kelasController@tambah');
Route::get('kelas', 'kelasController@awal');

Route::get('jadwal_pelajaran/lihat/{jadwal_pelajaran}','jadwal_pelajaranController@lihat');
Route::post('jadwal_pelajaran/simpan','jadwal_pelajaranController@simpan');
Route::get('jadwal_pelajaran/edit/{jadwal_pelajaran}', 'jadwal_pelajaranController@edit');
Route::post('jadwal_pelajaran/edit/{jadwal_pelajaran}','jadwal_pelajaranController@update');
Route::get('jadwal_pelajaran/hapus/{jadwal_pelajaran}','jadwal_pelajaranController@hapus');
Route::get('jadwal_pelajaran/tambah', 'jadwal_pelajaranController@tambah');
Route::get('jadwal_pelajaran', 'jadwal_pelajaranController@awal');

Route::get('guru_mengajar/lihat/{guru_mengajar}', 'guru_mengajarController@lihat');
Route::post('guru_mengajar/simpan','guru_mengajarController@simpan');
Route::get('guru_mengajar/edit/{guru_mengajar}', 'guru_mengajarController@edit');
Route::post('guru_mengajar/edit/{guru_mengajar}','guru_mengajarController@update');
Route::get('guru_mengajar/hapus/{guru_mengajar}','guru_mengajarController@hapus');
Route::get('guru_mengajar/tambah', 'guru_mengajarController@tambah');
Route::get('guru_mengajar', 'guru_mengajarController@awal');

Route::get('nilai/lihat/{nilai}','nilaiController@lihat');
Route::post('nilai/simpan','nilaiController@simpan');
Route::get('nilai/edit/{nilai}', 'nilaiController@edit');
Route::post('nilai/edit/{nilai}','nilaiController@update');
Route::get('nilai/hapus/{nilai}','nilaiController@hapus');
Route::get('nilai/tambah', 'nilaiController@tambah');
Route::get('nilai', 'nilaiController@awal');

});*/
Route::group(['middleware'=>'admin'],function(){
Route::get('wali/lihat/{wali}', 'waliController@lihat');
Route::post('wali/simpan','waliController@simpan');
Route::get('wali/edit/{wali}', 'waliController@edit');
Route::post('wali/edit/{wali}','waliController@update');
Route::get('wali/hapus/{wali}','waliController@hapus');
Route::get('wali/tambah', 'waliController@tambah');
Route::get('wali', 'waliController@awal');

Route::get('pelajaran/lihat/{pelajaran}','pelajaranController@lihat');
Route::post('pelajaran/simpan','pelajaranController@simpan');
Route::get('pelajaran/edit/{pelajaran}', 'pelajaranController@edit');
Route::post('pelajaran/edit/{pelajaran}','pelajaranController@update');
Route::get('pelajaran/hapus/{pelajaran}','pelajaranController@hapus');
Route::get('pelajaran/tambah', 'pelajaranController@tambah');
Route::get('pelajaran', 'pelajaranController@awal');

Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');
Route::get('pengguna/tambah','penggunaController@tambah');
Route::get('pengguna','penggunaController@awal');

Route::get('guru/lihat/{guru}', 'guruController@lihat');
Route::post('guru/simpan','guruController@simpan');
Route::get('guru/edit/{guru}', 'guruController@edit');
Route::post('guru/edit/{guru}','guruController@update');
Route::get('guru/hapus/{guru}','guruController@hapus');
Route::get('guru/tambah', 'guruController@tambah');
Route::get('guru', 'guruController@awal');

Route::get('siswa/lihat/{siswa}', 'siswaController@lihat');
Route::post('siswa/simpan','siswaController@simpan');
Route::get('siswa/edit/{siswa}', 'siswaController@edit');
Route::post('siswa/edit/{siswa}','siswaController@update');
Route::get('siswa/hapus/{siswa}','siswaController@hapus');
Route::get('siswa/tambah', 'siswaController@tambah');
Route::get('siswa', 'siswaController@awal');

Route::get('kelas/lihat/{kelas}','kelasController@lihat');
Route::post('kelas/simpan','kelasController@simpan');
Route::get('kelas/edit/{kelas}','kelasController@edit');
Route::post('kelas/edit/{kelas}','kelasController@update');
Route::get('kelas/hapus/{kelas}','kelasController@hapus');
Route::get('kelas/tambah', 'kelasController@tambah');
Route::get('kelas', 'kelasController@awal');

Route::get('jadwal_pelajaran/lihat/{jadwal_pelajaran}','jadwal_pelajaranController@lihat');
Route::post('jadwal_pelajaran/simpan','jadwal_pelajaranController@simpan');
Route::get('jadwal_pelajaran/edit/{jadwal_pelajaran}', 'jadwal_pelajaranController@edit');
Route::post('jadwal_pelajaran/edit/{jadwal_pelajaran}','jadwal_pelajaranController@update');
Route::get('jadwal_pelajaran/hapus/{jadwal_pelajaran}','jadwal_pelajaranController@hapus');
Route::get('jadwal_pelajaran/tambah', 'jadwal_pelajaranController@tambah');
Route::get('jadwal_pelajaran', 'jadwal_pelajaranController@awal');

Route::get('guru_mengajar/lihat/{guru_mengajar}', 'guru_mengajarController@lihat');
Route::post('guru_mengajar/simpan','guru_mengajarController@simpan');
Route::get('guru_mengajar/edit/{guru_mengajar}', 'guru_mengajarController@edit');
Route::post('guru_mengajar/edit/{guru_mengajar}','guru_mengajarController@update');
Route::get('guru_mengajar/hapus/{guru_mengajar}','guru_mengajarController@hapus');
Route::get('guru_mengajar/tambah', 'guru_mengajarController@tambah');
Route::get('guru_mengajar', 'guru_mengajarController@awal');

Route::get('nilai/lihat/{nilai}','nilaiController@lihat');
Route::post('nilai/simpan','nilaiController@simpan');
Route::get('nilai/edit/{nilai}', 'nilaiController@edit');
Route::post('nilai/edit/{nilai}','nilaiController@update');
Route::get('nilai/hapus/{nilai}','nilaiController@hapus');
Route::get('nilai/tambah', 'nilaiController@tambah');
Route::get('nilai', 'nilaiController@awal');
});

Route::get('/panelsiswa', function () {
    return view('siswa');
});


	Route::get('/panel', function () {
    return view('saya');
});


Route::get('/', function () {
    return view('index');
});
