@extends('saya')
@section('container')
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{ url('guru_mengajar') }}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> Tambah Data Jadwal Dosen</strong>
	</div>
	{!! Form::open(['url'=>'guru_mengajar/simpan','class'=>'form-horizontal']) !!}
	@include('guru_mengajar.form')
	<div  style="width:100%; text-align: right">
		<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop