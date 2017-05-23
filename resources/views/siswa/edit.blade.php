@extends('saya')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('siswa')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data siswa</strong>
 </div>
 {!! Form::model($siswa,['url'=>'siswa/edit/'.$siswa->id,'class'=>'form-horizontal']) !!}
@include('siswa.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop