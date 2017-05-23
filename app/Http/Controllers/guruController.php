<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;
use App\guru;

class guruController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {   
        $semuaGuru=guru::all();
        return view('guru.awal', compact('semuaGuru'));
    }
    public function tambah()
    {
        return view('guru.tambah');
    }
    public function simpan(Request $input)
    {   
        $this->validate($input,[
        'username'=>'required |min:6',
        'password'=>'required |min:6',
        'nama'=>'required',
        'nip'=>'required|max:12',
        'alamat'=>'required',
        'gelar'=>'required',
        'status'=>'required',
        'jabatan'=>'required',

        ]);
        $pengguna = new Pengguna($input->only('username','password','level'));
        if ($pengguna->save()){
        $guru = new guru;
        $guru -> nama = $input->nama;
        $guru -> nip = $input->nip;
        $guru -> alamat = $input->alamat;
        $guru -> gelar = $input->gelar;
        $guru -> status = $input->status;
        $guru -> jabatan = $input->jabatan;
        if ($pengguna->guru()->save($guru))
            $this->informasi='Berhasil simpan data';
            }
        return redirect('guru')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $guru = guru::find($id);
        return view('guru.edit')->with(array('guru'=>$guru));
          }
    
    public function lihat($id)
    {
        $guru = guru::find($id);
         return view('guru.lihat')->with(array('guru'=>$guru));      
}
    public  function update($id, Request $input){
        $guru = guru::find($id);  
        $guru -> nama = $input->nama;
        $guru -> nip = $input->nip;
        $guru -> alamat = $input->alamat;
        $guru -> gelar = $input->gelar;
        $guru -> status = $input->status;
        $guru -> jabatan = $input->jabatan;
        $guru->save();
             if (!is_null($input->username)){
            $pengguna=$guru->pengguna->fill($input->only('username'));
           if (!empty($input->password))
             $pengguna->password=$input->password;
        if ($pengguna->save()) $this->informasi='Berhasil simpan data';
    }else {
            $this->informasi='Gagal simpan data';
        }
        return redirect('guru')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
        $guru = guru::find($id);
        if ($guru->pengguna()->delete()){
            if ($guru->delete())$this->informasi='Berhasil hapus data';
        }
        return redirect('guru')->with(['informasi'=>$this->informasi]);
}
}
