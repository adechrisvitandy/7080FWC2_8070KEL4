<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
	</div>
	</div>
	<div class="form-group">
<label class="col-sm-2 control-label">NoHP</label>
	<div class="col-sm-10">
	{!! Form::text('noHP',null,['class'=>'form-control','placeholder'=>"noHP"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
	{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
	</div>
</div>
{{-- 	<div class="form-group">
<label class="col-sm-2 control-label">Pengguna_Id</label>
	<div class="col-sm-10">
	{!! Form::text('pengguna_id',null,['class'=>'form-control','placeholder'=>"Pengguna_Id"]) !!}
	</div>
</div> --}}
<div class="form-group">
<label class="col-sm-2 control-label">Username</label>
{!! form::hidden('level','wali')!!}
	<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
	{!! Form::text('password',null,['class'=>'form-control','placeholder'=>"password"]) !!}
	</div>

</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" id="jadwal_pelajaran_id">Pelajaran</label>
		<div class="col-sm-10">
		{!! Form::select('jadwal_pelajaran_id',$jadwal_pelajaran->listJadwal(),null,['class'=>'form-control','id' => 'jadwal_pelajaran_id','placeholder'=>"guru"]) !!}	
	</div>
</div>