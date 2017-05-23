<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pelajaran;

class pelajaranController extends Controller
{
	 public function awal()
    {
    	// return "Hello dari pelajaranController";
        return view ('pelajaran.awal', ['data'=>pelajaran::all()]) ;
    }

    public function tambah()
    {
    	// return $this->simpan();
        return view('pelajaran.tambah');
    }

    public function simpan(Request $input)
    {
        
        $pelajaran = new pelajaran;
        $pelajaran->judul = $input->judul;
        $pelajaran->keterangan = $input->keterangan;
        $informasi = $pelajaran->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('pelajaran')->with(['informasi'=>$informasi]);
    }
    public function edit($id) 
    {
        $pelajaran = pelajaran::find($id);
        return view('pelajaran.edit')->with(array('pelajaran'=>$pelajaran));
    }
    public function lihat($id) 
    {
        $pelajaran = pelajaran::find($id);
        return view('pelajaran.lihat')->with(array('pelajaran'=>$pelajaran));
    }
    public function update($id, Request $input)
    {
        $pelajaran = pelajaran::find($id);
        $pelajaran ->judul = $input->judul;
        $pelajaran->keterangan=$input->keterangan;
        $informasi=$pelajaran->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('pelajaran')->with(['informasi'=>$informasi]);         
    }
    public function hapus($id)
    {
        $pelajaran = pelajaran::find($id);
        $informasi = $pelajaran->delete() ? 'Berhasil hapus data' : ' Gagal hapus data';
        return redirect('pelajaran')->with(['informasi'=>$informasi]);
    }

}
