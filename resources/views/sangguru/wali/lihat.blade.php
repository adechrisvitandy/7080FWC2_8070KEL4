@extends('saya')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
 <strong><a href="{{ url('wali') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data wali
 </strong>
 </div>
 <table class="table">
 	<tr>
 		<td>nama</td>
 		<td>:</td>
 		<td>{{$wali->nama}}</td>
 	</tr>
 		<tr>
 		<td>nip</td>
 		<td>:</td>
 		<td>{{$wali->nip}}</td>
 	</tr>
 	<tr>
 		<td>alamat</td>
 		<td>:</td>
 		<td>{{$wali->alamat}}</td>
 	</tr>
 	<tr>
 		<td>Username</td>
 		<td>:</td>
 		<td>{{$wali->pengguna->username}}</td>
 	</tr>
 	<tr>
 	 	<td>Password</td>
 		<td>:</td>
 		<td>{{$wali->pengguna->password}}</td>
 	</tr>
 	<tr>
 
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{$wali->created_at}}</td>
 	</tr>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{$wali->updated_at}}</td>
 	</tr>

 </table>
 </div>
@stop