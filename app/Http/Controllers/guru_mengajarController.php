<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\guru_mengajar;
use App\guru;
use App\pelajaran;
use App\jadwal_pelajaran;

class guru_mengajarController extends Controller
{
   protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   $semuaGuruMengajar= guru_mengajar::all();
        return view('guru_mengajar.awal', compact('semuaGuruMengajar'));
    }
        
    public function tambah()
    {      
            $guru= new guru;
            $pelajaran= new pelajaran;
            
        return view('guru_mengajar.tambah',compact('guru','pelajaran'));
    }

    public function simpan(Request $input)
    {
        $guru_mengajar = new guru_mengajar($input->only('guru_id','pelajaran_id'));
        if ($guru_mengajar->save()) $this->informasi = "jadwal pelajaran berhasil disimpan";
        return redirect('guru_mengajar')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $guru_mengajar = guru_mengajar::find($id);
        $guru= new guru;
        $pelajaran= new pelajaran;
            
        return view('guru_mengajar.edit',compact('guru','pelajaran','guru_mengajar'));
          }
    
    public function lihat($id)
    {
        $guru_mengajar = guru_mengajar::find($id);
         return view('guru_mengajar.lihat',compact('guru_mengajar'));      
}
    public  function update($id, Request $input){
        $guru_mengajar = guru_mengajar::find($id);
        
        $guru_mengajar->fill($input->only('guru_id','pelajaran_id'));
        if ($guru_mengajar->save())$this->informasi="jadwal Mahasiswa telah di perbaharui";
       
        return redirect('guru_mengajar')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
    $guru_mengajar = guru_mengajar::find($id);
        if ($guru_mengajar->delete())$this->informasi="jadwal mahasiswa berhasil dihapus";
                   
         return redirect('guru_mengajar')->with(['informasi'=>$this->informasi]);
 }
}
