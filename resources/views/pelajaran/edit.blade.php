@extends('saya')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('pelajaran')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data pelajaran</strong>
	</div>
	{!! Form::model($pelajaran,['url'=>'pelajaran/edit/'.$pelajaran->id,'class'=>'form-horizontal']) !!}
	@include('pelajaran.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop