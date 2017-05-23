<div class="form-group">
	<label class="col-sm-2 control-label" id="siswa_id">siswa</label>
		<div class="col-sm-10">
		{!! Form::select('siswa_id',$siswa->listSiswaDanNis(),null,['class'=>'form-control','id' => 'siswa_id','placeholder'=>"Siswa"]) !!}
	</div>	
</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" id="guru_mengajar_id">Pelajaran</label>
		<div class="col-sm-10">
		{!! Form::select('guru_mengajar_id',$guru_mengajar->listGuru(),null,['class'=>'form-control','id' => 'guru_mengajar_id','placeholder'=>"guru"]) !!}	
	</div>
</div>

<div class="form-group">
		<label class="col-sm-2 control-label" id="kelas_id">kelas</label>
	<div class="col-sm-10">
		{!! Form::select('kelas_id',$kelas->lists('title','id'),null,['class'=>'form-control','id' => 'kelas_id','placeholder'=>"kelas"]) !!}
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="kelas_id">Nilai</label>
	<div class="col-sm-10">
		{!! Form::select('nilai_id',$nilai->lists('ketnilai','id'),null,['class'=>'form-control','id' => 'nilai_id','placeholder'=>"nilai"]) !!}
	</div>
</div>