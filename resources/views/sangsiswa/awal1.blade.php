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
             <th>data nilai</th>
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
                <td>{{$jadwal_pelajaran->guru_mengajar->pelajaran->judul or 'Pelajaran Kosong' }}</td>
                 <td>{{$jadwal_pelajaran->nilai->ketnilai or 'nilai Kosong' }}</td>
              
               </td>

         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
 @stop