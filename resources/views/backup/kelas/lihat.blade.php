@extends('saya')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kelas') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data kelas</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Title</td>
			<td>:</td>
			<td>{{ $kelas->title }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$kelas->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$kelas->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
