<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_pelajaran;
use App\guru_mengajar;
use App\siswa;
use App\kelas;
use App\nilai;
class jadwal_pelajaranController extends Controller
{
     protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   $semuaJadwal_pelajaran= jadwal_pelajaran::all();
        return view('jadwal_pelajaran.awal', compact('semuaJadwal_pelajaran'));
    }
        
    public function tambah()
    {       $siswa= new siswa;
            $kelas= new kelas;
            $nilai= new nilai;
            $guru_mengajar= new guru_mengajar;
        return view('jadwal_pelajaran.tambah',compact('siswa','kelas','nilai','guru_mengajar'));
    }

    public function simpan(Request $input)
    {
        $jadwal_pelajaran = new jadwal_pelajaran($input->only('siswa_id','kelas_id','nilai_id','guru_mengajar_id'));
        if ($jadwal_pelajaran->save()) $this->informasi = "jadwal Pelajaran berhasil disimpan";
        return redirect('jadwal_pelajaran')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $jadwal_pelajaran = jadwal_pelajaran::find($id);
        $siswa = new siswa;
        $kelas = new kelas;
        $nilai= new nilai;
        $guru_mengajar = new guru_mengajar;
        return view('jadwal_pelajaran.edit',compact('siswa','kelas','nilai','guru_mengajar','jadwal_pelajaran'));


          }
    
    public function lihat($id)
    {
        $jadwal_pelajaran = jadwal_pelajaran::find($id);
         return view('jadwal_pelajaran.lihat',compact('jadwal_pelajaran'));      
}
    public  function update($id, Request $input){
        $jadwal_pelajaran = jadwal_pelajaran::find($id);
        
        $jadwal_pelajaran->fill($input->only('kelas_id','guru_mengajar_id','siswa_id','nilai_id'));
        if ($jadwal_pelajaran->save())$this->informasi="jadwal siswa telah di perbaharui";
       
        return redirect('jadwal_pelajaran')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
    $jadwal_pelajaran = jadwal_pelajaran::find($id);
        if ($jadwal_pelajaran->delete())$this->informasi="jadwal siswa berhasil dihapus";
                   
         return redirect('jadwal_pelajaran')->with(['informasi'=>$this->informasi]);
 }
}
