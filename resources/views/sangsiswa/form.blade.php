<div class="form-group">
	<label class="col-sm-2 control-label" id="guru_id">GURU</label>
	<div class="col-sm-10">
	{!! Form::select('guru_id',$guru->listGuruDanNIP(),null,['class'=>'form-control','id'=>'guru_id','placeholder'=>"Guru"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="pelajaran_id">pelajaran</label>
	<div class="col-sm-10">
	{!! Form::select('pelajaran_id',$pelajaran->lists('judul','id'),null,['class'=>'form-control','id'=>'pelajaran_id','placeholder'=>"pelajaran"]) !!}
	</div>
	</div>
