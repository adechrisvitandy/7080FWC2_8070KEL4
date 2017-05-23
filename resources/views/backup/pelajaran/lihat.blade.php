@extends('saya')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pelajaran') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data pelajaran</strong>		
	</div>
	<table class="table">
		<tr>
			<td>pelajaran</td>
			<td>:</td>
			<td>{{ $pelajaran->judul }}</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{ $pelajaran->keterangan }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pelajaran->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pelajaran->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
