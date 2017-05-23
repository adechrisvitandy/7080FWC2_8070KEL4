@extends('saya')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data guru_mengajar</strong>
<a href="{{url('guru_mengajar/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>guru_mengajar</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Nama Guru</th>
             <th>Nama Pelajaran</th>
             
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaGuruMengajar as $guru_mengajar)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$guru_mengajar->guru->nama or 'nama kosong'}}</td>
               <td>{{$guru_mengajar->pelajaran->judul or 'title kosong'}}</td>
                       <td>
               <div class="btn-group" role="group">
               <a href="{{url('guru_mengajar/edit/'.$guru_mengajar->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('guru_mengajar/lihat/'.$guru_mengajar->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('guru_mengajar/hapus/'.$guru_mengajar->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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