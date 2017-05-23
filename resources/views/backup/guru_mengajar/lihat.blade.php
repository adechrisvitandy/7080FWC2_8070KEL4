@extends('saya')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('guru_mengajar') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Jadwal Guru</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{ $guru_mengajar->guru->nama }}</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{ $guru_mengajar->guru->nip }}</td>
		</tr>
		<tr>
			<td>pelajaran</td>
			<td>:</td>
			<td>{{ $guru_mengajar->pelajaran->title }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$guru_mengajar->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$guru_mengajar->updated_at}}</td>
		</tr>
	</table>
</div>
@stop