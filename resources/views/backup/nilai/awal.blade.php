@extends('saya')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data nilai</strong>
		<a href="{{url('nilai/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> nilai</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th> nilai</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $nilai)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $nilai->ketnilai or 'nilai Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('nilai/edit/'.$nilai->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('nilai/lihat/'.$nilai->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('nilai/hapus/'.$nilai->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop