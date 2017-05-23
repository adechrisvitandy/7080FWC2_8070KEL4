
@extends('saya')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data wali murid</strong>
<a href="{{url('wali/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>wali</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Nama</th>
             <th>NoHP</th>
             
             <th>nama</th> 
            <th>nilai</th>
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuawali as $wali)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$wali->nama or 'nama kosong'}}</td>
               <td>{{$wali->noHP or 'NIP kosong'}}</td>
               <td>{{$wali->jadwal_pelajaran->siswa->nama or 'nama kosong'}}</td>
               <td>{{$wali->jadwal_pelajaran->nilai->ketnilai or 'nilai kosong'}}</td>
                {{-- <td>{{$wali->alamat or 'Alamat kosong'}}</td> --}}
{{--                <td>{{$wali->pengguna_id or 'Pengguna_id kosong'}}</td> --}}
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('wali/edit/'.$wali->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('wali/lihat/'.$wali->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('wali/hapus/'.$wali->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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