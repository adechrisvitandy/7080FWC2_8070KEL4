@extends('saya')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data jadwal matakuliah</strong>
<a href="{{url('jadwal_pelajaran/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>jadwal Pelajaran</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Nama siswa</th>
             <th>NIS siswa</th>
             <th>Nama Pelajaran</th>
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaJadwal_pelajaran as $jadwal_pelajaran)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$jadwal_pelajaran->siswa->nama or 'nama kosong'}}</td>
               <td>{{$jadwal_pelajaran->siswa->nis or 'nis kosong'}}</td>
                <td>{{$jadwal_pelajaran->guru_mengajar->pelajaran->judul or 'Pelajaran Kosong' }}
                <td>
                       <td>
               <div class="btn-group" role="group">
               <a href="{{url('jadwal_pelajaran/edit/'.$jadwal_pelajaran->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('jadwal_pelajaran/lihat/'.$jadwal_pelajaran->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('jadwal_pelajaran/hapus/'.$jadwal_pelajaran->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                   <i class="fa fa-remove"></i>
               </a>
               </div>
               </td>

         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
 @stop