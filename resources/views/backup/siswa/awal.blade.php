@extends('saya')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data siswa</strong>
<a href="{{url('siswa/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>siswa</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Nama</th>
             <th>Nis</th>
             {{-- <th>Alamat</th> --}}
            {{--  <th>Pengguna_id</th> --}}
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaSiswa as $siswa)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$siswa->nama or 'nama kosong'}}</td>
               <td>{{$siswa->nis or 'NIM kosong'}}</td>
                {{-- <td>{{$siswa->alamat or 'Alamat kosong'}}</td> --}}
{{--                <td>{{$siswa->pengguna_id or 'Pengguna_id kosong'}}</td> --}}
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('siswa/edit/'.$siswa->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('siswa/lihat/'.$siswa->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('siswa/hapus/'.$siswa->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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