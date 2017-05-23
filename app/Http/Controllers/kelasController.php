<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kelas;

class kelasController extends Controller
{
    public function awal()
    {
        return view('kelas.awal',['data'=>kelas::all()]);
    }
    public function tambah()
    {
        return view('kelas.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
        'title'=>'required',
        ]);
        $kelas = new kelas();
        $kelas->title = $input->title;
        $kelas->save();
        $informasi = $kelas->save()? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('kelas')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $kelas = kelas::find($id);
        return view('kelas.edit')->with(array('kelas'=>$kelas));
    }
    public function lihat($id)
    {
        $kelas = kelas::find($id);
        return view('kelas.lihat')->with(array('kelas'=>$kelas));
    }
    public function update($id,Request $input)
    {
        $kelas = kelas::find($id);
        $kelas->title = $input->title;
        $kelas->save();
        $informasi = $kelas->save()? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('kelas')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $kelas = kelas::find($id);
        $informasi = $kelas->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('kelas')->with(['informasi'=>$informasi]);
    }
}
