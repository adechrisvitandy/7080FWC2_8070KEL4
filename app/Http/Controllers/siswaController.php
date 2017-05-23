<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

use App\siswa;

class siswaController extends Controller
{
   protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {   
        $semuaSiswa=siswa::all();
        return view('siswa.awal', compact('semuaSiswa'));
    }
    public function tambah()
    {
        return view('siswa.tambah');
    }
    public function simpan(Request $input)
    {   
        $this->validate($input,[
        'username'=>'required |min:6',
        'password'=>'required |min:6',
        'nama'=>'required ',
        'nis'=>'required |max:12',
        'alamat'=>'required',
        ]);
        $pengguna = new Pengguna($input->only('username','password','level'));
        if ($pengguna->save()){
        $siswa = new siswa;
        $siswa -> nama = $input->nama;
        $siswa -> nis = $input->nis;
        $siswa -> alamat = $input->alamat;
        if ($pengguna->siswa()->save($siswa))
            $this->informasi='Berhasil simpan data';
            }
        return redirect('siswa')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $siswa = siswa::find($id);
        return view('siswa.edit')->with(array('siswa'=>$siswa));
          }
    
    public function lihat($id)
    {
        $siswa = siswa::find($id);
         return view('siswa.lihat')->with(array('siswa'=>$siswa));      
}
    public  function update($id, Request $input){
        $siswa = siswa::find($id);
        $siswa -> nama = $input->nama;
        $siswa -> nis = $input->nis;
        $siswa -> alamat = $input->alamat;
        $siswa->save();
           if (!is_null($input->username)){
            $pengguna=$siswa->pengguna->fill($input->only('username'));
           if (!empty($input->password)) $pengguna->password=$input->password;
        if ($pengguna->save()) 
            $this->informasi='Berhasil simpan data';
    }else {
            $this->informasi='Gagal simpan data';
        }
        return redirect('siswa')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
        $siswa = siswa::find($id);
        if ($siswa->pengguna()->delete()){
            if ($siswa->delete())$this->informasi='Berhasil hapus data';
        }
        return redirect('siswa')->with(['informasi'=>$this->informasi]);
}
}
