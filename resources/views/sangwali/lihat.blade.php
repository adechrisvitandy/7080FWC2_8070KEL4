@extends('saya')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal_pelajaran') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Jadwal Pelajaran</strong>		
	</div>
	<table class="table">
		<tr>
			<td>siswa</td>
			<td>:</td>
			<td>{{ $jadwal_pelajaran->siswa->nama }}</td>
		</tr>	
		<tr>
			<td>kelas</td>
			<td>:</td>
			<td>{{ $jadwal_pelajaran->kelas->title }}</td>
		</tr>	
		<tr>
			<td>Guru Pelajaran</td>
			<td>:</td>
			<td>{{ $jadwal_pelajaran->guru_mengajar->pelajaran->judul}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwal_pelajaran->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwal_pelajaran->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
