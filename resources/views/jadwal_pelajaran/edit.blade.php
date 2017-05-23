@extends('saya')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('jadwal_pelajaran')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data jadwal siswa</strong>
 </div>
 {!! Form::model($jadwal_pelajaran,['url'=>'jadwal_pelajaran/edit/'.$jadwal_pelajaran->id,'class'=>'form-horizontal']) !!}
@include('jadwal_pelajaran.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop