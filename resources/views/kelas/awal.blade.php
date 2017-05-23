@extends('saya')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data kelas</strong>
		<a href="{{url('kelas/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> kelas</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama kelas</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $kelas)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $kelas->title or 'kelas Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('kelas/edit/'.$kelas->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('kelas/lihat/'.$kelas->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('kelas/hapus/'.$kelas->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop