<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\nilai;
class nilaiController extends Controller
{
public function awal()
    {
        return view('nilai.awal',['data'=>nilai::all()]);
    }
    public function tambah()
    {
        return view('nilai.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
        'ketnilai'=>'required',
        'keterangan'=>'required',
        ]);
        $nilai = new nilai();
        $nilai->ketnilai = $input->ketnilai;
        $nilai->keterangan = $input->keterangan;
        $nilai->save();
        $informasi = $nilai->save()? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('nilai')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $nilai = nilai::find($id);
        return view('nilai.edit')->with(array('nilai'=>$nilai));
    }
    public function lihat($id)
    {
        $nilai = nilai::find($id);
        return view('nilai.lihat')->with(array('nilai'=>$nilai));
    }
    public function update($id,Request $input)
    {
        $nilai = nilai::find($id);
        $nilai->ketnilai = $input->ketnilai;
        $nilai->save();
        $informasi = $nilai->save()? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('nilai')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $nilai = nilai::find($id);
        $informasi = $nilai->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('nilai')->with(['informasi'=>$informasi]);
    }      
}
