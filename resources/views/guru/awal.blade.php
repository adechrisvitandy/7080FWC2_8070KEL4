
@extends('saya')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data guru</strong>
<a href="{{url('guru/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>guru</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Nama</th>
             <th>NIP</th>
            <th>Alamat</th>
            {{--  <th>Pengguna_id</th> --}}
            <th>Gelar</th>
            <th>Status</th>
            <th>Jabatan</th>
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaGuru as $guru)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$guru->nama or 'nama kosong'}}</td>
               <td>{{$guru->nip or 'NIP kosong'}}</td>
                 <td>{{$guru->alamat or 'Alamat kosong'}}</td> 
                  <td>{{$guru->gelar or 'gelar kosong'}}</td> 
                   <td>{{$guru->status or 'status kosong'}}</td> 
                    <td>{{$guru->jabatan or 'jabatan kosong'}}</td> 
{{--                <td>{{$guru->pengguna_id or 'Pengguna_id kosong'}}</td> --}}
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('guru/edit/'.$guru->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('guru/lihat/'.$guru->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('guru/hapus/'.$guru->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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