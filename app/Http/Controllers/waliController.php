<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\wali;
use App\pengguna;
use App\jadwal_pelajaran;
class waliController extends Controller
{
  protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {   
        $semuawali=wali::all();
        return view('wali.awal', compact('semuawali'));
    }
    public function tambah()
    {
        $jadwal_pelajaran= new jadwal_pelajaran;
        return view('wali.tambah',compact('jadwal_pelajaran'));
    }
    public function simpan(Request $input)
    {   
        $this->validate($input,[
        'username'=>'required | min:6',
        'password'=>'required | min:6',
        'nama'=>'required',
        'noHP'=>'required | max:12',
        'alamat'=>'required',
        ]);
        $pengguna = new Pengguna($input->only('username','password','jadwal_pelajaran_id','level'));
        if ($pengguna->save()){
        $wali = new wali;
        $wali -> nama = $input->nama;
        $wali -> noHP= $input->noHP;
        $wali -> alamat = $input->alamat;
        $jadwal_pelajaran= new jadwal_pelajaran($input->only('jadwal_pelajaran_id'));
        if ($pengguna->wali()->save($wali) && $jadwal_pelajaran->wali->save($wali))
            $this->informasi='Berhasil simpan data';
            }  
        return redirect('wali')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $wali = wali::find($id);
        return view('wali.edit')->with(array('wali'=>$wali));
          }
    
    public function lihat($id)
    {
        $wali = wali::find($id);
         return view('wali.lihat')->with(array('wali'=>$wali));      
}
    public  function update($id, Request $input){
        $wali = wali::find($id);
        $wali -> nama = $input->nama;
        $wali -> noHP= $input->noHP;
        $wali -> alamat = $input->alamat;
        $jadwal_pelajaran= new jadwal_pelajaran;
        $wali->save();
           if (!is_null($input->username)){
            $pengguna=$wali->pengguna->fill($input->only('username'));
           if (!empty($input->password)) $pengguna->password=$input->password;
        if ($pengguna->save()) $this->informasi='Berhasil simpan data';
    }else {
            $this->informasi='Gagal simpan data';
        }
        return redirect('wali')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
        $wali = wali::find($id);
        if ($wali->pengguna()->delete()){
            if ($wali->delete())$this->informasi='Berhasil hapus data';
        }
        return redirect('wali')->with(['informasi'=>$this->informasi]);
}
}
