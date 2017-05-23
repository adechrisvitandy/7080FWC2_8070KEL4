@extends('saya')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data pelajaran</strong>
		<a href="{{url('pelajaran/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> pelajaran</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama pelajaran</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $pelajaran)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $pelajaran->judul or 'title kosong' }}</td>
				<td>{{ $pelajaran->keterangan or 'keterangan kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pelajaran/edit/'.$pelajaran->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pelajaran/lihat/'.$pelajaran->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pelajaran/hapus/'.$pelajaran->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop