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

         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
 @stop